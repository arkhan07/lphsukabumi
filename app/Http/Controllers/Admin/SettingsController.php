<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display settings page
     */
    public function index()
    {
        // Load current settings from config or .env
        $settings = [
            'app_name' => config('app.name', 'LPH Doa Bangsa Sukabumi'),
            'app_email' => env('MAIL_FROM_ADDRESS', 'info@lphsukabumi.com'),
            'app_phone' => env('APP_PHONE', '0266-123456'),
            'app_address' => env('APP_ADDRESS', 'Jl. Raya Sukabumi No. 123, Sukabumi, Jawa Barat 43121'),

            // Email Settings
            'mail_host' => env('MAIL_HOST', 'smtp.gmail.com'),
            'mail_port' => env('MAIL_PORT', '587'),
            'mail_username' => env('MAIL_USERNAME', 'noreply@lphsukabumi.com'),
            'mail_encryption' => env('MAIL_ENCRYPTION', 'tls'),

            // Certification Settings
            'cert_validity_years' => env('CERT_VALIDITY_YEARS', 2),
            'payment_due_days' => env('PAYMENT_DUE_DAYS', 14),
            'default_cert_fee' => env('DEFAULT_CERT_FEE', 2500000),
            'default_audit_fee' => env('DEFAULT_AUDIT_FEE', 1500000),

            // Notification Settings
            'notif_email' => env('NOTIF_EMAIL_ENABLED', true),
            'notif_sms' => env('NOTIF_SMS_ENABLED', false),
            'notif_whatsapp' => env('NOTIF_WHATSAPP_ENABLED', true),
        ];

        return view('admin.settings', compact('settings'));
    }

    /**
     * Update general settings
     */
    public function updateGeneral(Request $request)
    {
        $validated = $request->validate([
            'app_name' => 'required|string|max:255',
            'app_email' => 'required|email|max:255',
            'app_phone' => 'required|string|max:50',
            'app_address' => 'required|string',
        ]);

        // Update .env file
        $this->updateEnvFile([
            'APP_NAME' => $validated['app_name'],
            'MAIL_FROM_ADDRESS' => $validated['app_email'],
            'APP_PHONE' => $validated['app_phone'],
            'APP_ADDRESS' => $validated['app_address'],
        ]);

        return back()->with('success', 'Pengaturan umum berhasil diperbarui');
    }

    /**
     * Update email settings
     */
    public function updateEmail(Request $request)
    {
        $validated = $request->validate([
            'mail_host' => 'required|string|max:255',
            'mail_port' => 'required|numeric|min:1|max:65535',
            'mail_username' => 'required|string|max:255',
            'mail_password' => 'nullable|string|max:255',
            'mail_encryption' => 'required|in:tls,ssl',
        ]);

        $envData = [
            'MAIL_HOST' => $validated['mail_host'],
            'MAIL_PORT' => $validated['mail_port'],
            'MAIL_USERNAME' => $validated['mail_username'],
            'MAIL_ENCRYPTION' => $validated['mail_encryption'],
        ];

        // Only update password if provided
        if (!empty($validated['mail_password'])) {
            $envData['MAIL_PASSWORD'] = $validated['mail_password'];
        }

        $this->updateEnvFile($envData);

        return back()->with('success', 'Pengaturan email berhasil diperbarui');
    }

    /**
     * Update certification settings
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
     * Update notification settings
     */
    public function updateNotifications(Request $request)
    {
        $validated = $request->validate([
            'notif_email' => 'nullable|boolean',
            'notif_sms' => 'nullable|boolean',
            'notif_whatsapp' => 'nullable|boolean',
        ]);

        $this->updateEnvFile([
            'NOTIF_EMAIL_ENABLED' => $validated['notif_email'] ?? false ? 'true' : 'false',
            'NOTIF_SMS_ENABLED' => $validated['notif_sms'] ?? false ? 'true' : 'false',
            'NOTIF_WHATSAPP_ENABLED' => $validated['notif_whatsapp'] ?? false ? 'true' : 'false',
        ]);

        return back()->with('success', 'Pengaturan notifikasi berhasil diperbarui');
    }

    /**
     * Upload logo
     */
    public function uploadLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
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

            return back()->with('success', 'Logo berhasil diupload');
        }

        return back()->with('error', 'Gagal mengupload logo');
    }

    /**
     * Test email configuration
     */
    public function testEmail(Request $request)
    {
        try {
            $testEmail = $request->input('test_email', auth()->user()->email);

            // Send test email
            \Mail::raw('Ini adalah email test dari sistem LPH Doa Bangsa Sukabumi.', function ($message) use ($testEmail) {
                $message->to($testEmail)
                        ->subject('Test Email - LPH Doa Bangsa');
            });

            return back()->with('success', 'Email test berhasil dikirim ke ' . $testEmail);
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email test: ' . $e->getMessage());
        }
    }

    /**
     * Update .env file
     */
    private function updateEnvFile(array $data)
    {
        $envFile = base_path('.env');
        $envContent = File::get($envFile);

        foreach ($data as $key => $value) {
            // Escape special characters and wrap in quotes if contains spaces
            $quotedValue = (strpos($value, ' ') !== false || empty($value)) ? '"' . str_replace('"', '\"', $value) . '"' : $value;

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
            \Artisan::call('config:clear');
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
