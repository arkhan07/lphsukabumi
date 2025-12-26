<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    /**
     * Display settings page
     */
    public function index()
    {
        // Get settings from database, fallback to .env
        $settings = [
            'email' => Setting::getByGroup('email'),
            'whatsapp' => Setting::getByGroup('whatsapp'),
            'recaptcha' => Setting::getByGroup('recaptcha'),
            'appearance' => Setting::getByGroup('appearance'),
        ];

        // Legacy settings from .env for backwards compatibility
        $legacySettings = [
            'app_name' => config('app.name', 'LPH Doa Bangsa Sukabumi'),
            'app_email' => env('MAIL_FROM_ADDRESS', 'info@lphsukabumi.com'),
            'app_phone' => env('APP_PHONE', '0266-123456'),
            'app_address' => env('APP_ADDRESS', 'Jl. Raya Sukabumi No. 123, Sukabumi, Jawa Barat 43121'),
            'cert_validity_years' => env('CERT_VALIDITY_YEARS', 2),
            'payment_due_days' => env('PAYMENT_DUE_DAYS', 14),
            'default_cert_fee' => env('DEFAULT_CERT_FEE', 2500000),
            'default_audit_fee' => env('DEFAULT_AUDIT_FEE', 1500000),
        ];

        return view('admin.settings.index', compact('settings', 'legacySettings'));
    }

    /**
     * Update settings
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // SMTP settings
            'smtp_host' => 'nullable|string',
            'smtp_port' => 'nullable|numeric',
            'smtp_username' => 'nullable|string',
            'smtp_password' => 'nullable|string',
            'smtp_encryption' => 'nullable|string|in:tls,ssl,none',
            'smtp_from_address' => 'nullable|email',
            'smtp_from_name' => 'nullable|string',

            // WhatsApp settings
            'whatsapp_enabled' => 'nullable|boolean',
            'whatsapp_api_url' => 'nullable|url',
            'whatsapp_api_key' => 'nullable|string',
            'whatsapp_sender_number' => 'nullable|string',
            'whatsapp_welcome_message' => 'nullable|string',
            'whatsapp_verification_message' => 'nullable|string',
            'whatsapp_payment_reminder' => 'nullable|string',
            'whatsapp_status_update' => 'nullable|string',

            // reCAPTCHA settings
            'recaptcha_enabled' => 'nullable|boolean',
            'recaptcha_site_key' => 'nullable|string',
            'recaptcha_secret_key' => 'nullable|string',

            // Appearance settings
            'site_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'site_favicon' => 'nullable|image|mimes:png,ico|max:512',
            'site_name' => 'nullable|string',
            'site_description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.settings.index')
                ->withErrors($validator)
                ->withInput();
        }

        // Handle file uploads
        if ($request->hasFile('site_logo')) {
            // Delete old logo if exists
            $oldLogo = Setting::get('site_logo');
            if ($oldLogo && File::exists(public_path($oldLogo))) {
                File::delete(public_path($oldLogo));
            }

            $logoPath = $request->file('site_logo')->store('uploads/logo', 'public');
            Setting::set('site_logo', 'storage/' . $logoPath);
        }

        if ($request->hasFile('site_favicon')) {
            // Delete old favicon if exists
            $oldFavicon = Setting::get('site_favicon');
            if ($oldFavicon && File::exists(public_path($oldFavicon))) {
                File::delete(public_path($oldFavicon));
            }

            $faviconPath = $request->file('site_favicon')->store('uploads/favicon', 'public');
            Setting::set('site_favicon', 'storage/' . $faviconPath);
        }

        // Update all other settings
        foreach ($request->except(['_token', '_method', 'site_logo', 'site_favicon']) as $key => $value) {
            // Convert checkboxes to boolean
            if (in_array($key, ['whatsapp_enabled', 'recaptcha_enabled'])) {
                $value = $request->has($key) ? '1' : '0';
            }

            // Skip empty password fields (so we don't overwrite existing passwords)
            if (in_array($key, ['smtp_password', 'whatsapp_api_key', 'recaptcha_secret_key']) && empty($value)) {
                continue;
            }

            Setting::set($key, $value);
        }

        // Clear settings cache
        Setting::clearCache();

        // Update .env file for email settings
        if ($request->has('smtp_host')) {
            $this->updateEnvFile([
                'MAIL_MAILER' => 'smtp',
                'MAIL_HOST' => $request->smtp_host,
                'MAIL_PORT' => $request->smtp_port,
                'MAIL_USERNAME' => $request->smtp_username,
                'MAIL_PASSWORD' => $request->smtp_password,
                'MAIL_ENCRYPTION' => $request->smtp_encryption,
                'MAIL_FROM_ADDRESS' => $request->smtp_from_address,
                'MAIL_FROM_NAME' => '"' . $request->smtp_from_name . '"',
            ]);
        }

        // Clear config cache
        try {
            Artisan::call('config:clear');
        } catch (\Exception $e) {
            // Ignore if command fails
        }

        return redirect()
            ->route('admin.settings.index')
            ->with('success', 'Pengaturan berhasil diperbarui!');
    }

    /**
     * Update general settings (legacy)
     */
    public function updateGeneral(Request $request)
    {
        $validated = $request->validate([
            'app_name' => 'required|string|max:255',
            'app_email' => 'required|email|max:255',
            'app_phone' => 'required|string|max:50',
            'app_address' => 'required|string',
        ]);

        $this->updateEnvFile([
            'APP_NAME' => '"' . $validated['app_name'] . '"',
            'MAIL_FROM_ADDRESS' => $validated['app_email'],
            'APP_PHONE' => $validated['app_phone'],
            'APP_ADDRESS' => '"' . $validated['app_address'] . '"',
        ]);

        return back()->with('success', 'Pengaturan umum berhasil diperbarui');
    }

    /**
     * Update certification settings (legacy)
     */
    public function updateCertification(Request $request)
    {
        $validated = $request->validate([
            'cert_validity_years' => 'required|numeric|min:1|max:10',
            'payment_due_days' => 'required|numeric|min:1|max:365',
            'default_cert_fee' => 'required|numeric|min:0',
            'default_audit_fee' => 'required|numeric|min:0',
        ]);

        $this->updateEnvFile([
            'CERT_VALIDITY_YEARS' => $validated['cert_validity_years'],
            'PAYMENT_DUE_DAYS' => $validated['payment_due_days'],
            'DEFAULT_CERT_FEE' => $validated['default_cert_fee'],
            'DEFAULT_AUDIT_FEE' => $validated['default_audit_fee'],
        ]);

        return back()->with('success', 'Pengaturan sertifikasi berhasil diperbarui');
    }

    /**
     * Test SMTP connection
     */
    public function testSmtp(Request $request)
    {
        try {
            $testEmail = $request->input('test_email', auth()->user()->email);

            \Mail::raw('Ini adalah email tes dari LPH Doa Bangsa Sukabumi. Jika Anda menerima email ini, konfigurasi SMTP Anda sudah benar.', function ($message) use ($testEmail) {
                $message->to($testEmail)
                    ->subject('Test Email - LPH Doa Bangsa Sukabumi');
            });

            return response()->json([
                'success' => true,
                'message' => 'Email tes berhasil dikirim ke ' . $testEmail
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim email: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Test WhatsApp connection
     */
    public function testWhatsapp(Request $request)
    {
        try {
            $testNumber = $request->input('test_number');

            $whatsappService = app(\App\Services\WhatsAppService::class);
            $result = $whatsappService->sendMessage(
                $testNumber,
                'Ini adalah pesan tes dari LPH Doa Bangsa Sukabumi. Jika Anda menerima pesan ini, konfigurasi WhatsApp Anda sudah benar.'
            );

            if ($result['success']) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pesan WhatsApp berhasil dikirim ke ' . $testNumber
                ]);
            } else {
                throw new \Exception($result['message'] ?? 'Gagal mengirim pesan WhatsApp');
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim pesan WhatsApp: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Upload logo
     */
    public function uploadLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');

            // Delete old logo if exists
            $oldLogoPath = public_path('assets/images/logo.png');
            if (File::exists($oldLogoPath)) {
                File::delete($oldLogoPath);
            }

            // Save new logo
            $fileName = 'logo.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images'), $fileName);

            // Update settings
            Setting::set('site_logo', 'assets/images/' . $fileName);
            Setting::clearCache();

            return back()->with('success', 'Logo berhasil diupload');
        }

        return back()->with('error', 'Gagal mengupload logo');
    }

    /**
     * Test email configuration
     */
    public function testEmail(Request $request)
    {
        return $this->testSmtp($request);
    }

    /**
     * Update .env file
     */
    private function updateEnvFile(array $data)
    {
        $envFile = base_path('.env');
        $envContent = File::get($envFile);

        foreach ($data as $key => $value) {
            // Skip if value is null
            if ($value === null) {
                continue;
            }

            // Escape special characters and wrap in quotes if needed
            if (!is_numeric($value) && strpos($value, ' ') !== false && !str_starts_with($value, '"')) {
                $quotedValue = '"' . str_replace('"', '\"', $value) . '"';
            } else {
                $quotedValue = $value;
            }

            // Check if key exists
            if (preg_match("/^{$key}=.*/m", $envContent)) {
                // Update existing key
                $envContent = preg_replace("/^{$key}=.*/m", "{$key}={$quotedValue}", $envContent);
            } else {
                // Add new key at the end
                $envContent .= "\n{$key}={$quotedValue}";
            }
        }

        File::put($envFile, $envContent);

        // Clear config cache
        try {
            Artisan::call('config:clear');
        } catch (\Exception $e) {
            // Ignore if command fails
        }
    }

    /**
     * Get system information
     */
    public function systemInfo()
    {
        $info = [
            'app_version' => '1.0.0',
            'laravel_version' => app()->version(),
            'php_version' => PHP_VERSION,
            'database' => config('database.default'),
            'server' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
            'timezone' => config('app.timezone'),
            'locale' => config('app.locale'),
        ];

        return response()->json($info);
    }
}
