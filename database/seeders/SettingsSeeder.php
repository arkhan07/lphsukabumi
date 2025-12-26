<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            // SMTP Email Settings
            [
                'key' => 'smtp_host',
                'value' => 'smtp.gmail.com',
                'type' => 'text',
                'group' => 'email',
                'label' => 'SMTP Host',
                'description' => 'SMTP server hostname (e.g., smtp.gmail.com, smtp.mailtrap.io)',
            ],
            [
                'key' => 'smtp_port',
                'value' => '587',
                'type' => 'text',
                'group' => 'email',
                'label' => 'SMTP Port',
                'description' => 'SMTP port number (587 for TLS, 465 for SSL)',
            ],
            [
                'key' => 'smtp_username',
                'value' => '',
                'type' => 'text',
                'group' => 'email',
                'label' => 'SMTP Username',
                'description' => 'SMTP authentication username',
            ],
            [
                'key' => 'smtp_password',
                'value' => '',
                'type' => 'password',
                'group' => 'email',
                'label' => 'SMTP Password',
                'description' => 'SMTP authentication password',
            ],
            [
                'key' => 'smtp_encryption',
                'value' => 'tls',
                'type' => 'select',
                'group' => 'email',
                'label' => 'SMTP Encryption',
                'description' => 'Encryption method (tls, ssl, or none)',
            ],
            [
                'key' => 'smtp_from_address',
                'value' => 'noreply@lphsukabumi.com',
                'type' => 'email',
                'group' => 'email',
                'label' => 'From Email Address',
                'description' => 'Email address that appears in the From field',
            ],
            [
                'key' => 'smtp_from_name',
                'value' => 'LPH Doa Bangsa Sukabumi',
                'type' => 'text',
                'group' => 'email',
                'label' => 'From Name',
                'description' => 'Name that appears in the From field',
            ],

            // WhatsApp Onesender Settings
            [
                'key' => 'whatsapp_enabled',
                'value' => '0',
                'type' => 'boolean',
                'group' => 'whatsapp',
                'label' => 'Enable WhatsApp',
                'description' => 'Enable or disable WhatsApp notifications',
            ],
            [
                'key' => 'whatsapp_api_url',
                'value' => '',
                'type' => 'text',
                'group' => 'whatsapp',
                'label' => 'Onesender API URL',
                'description' => 'Onesender API endpoint URL',
            ],
            [
                'key' => 'whatsapp_api_key',
                'value' => '',
                'type' => 'password',
                'group' => 'whatsapp',
                'label' => 'Onesender API Key',
                'description' => 'Your Onesender API key',
            ],
            [
                'key' => 'whatsapp_sender_number',
                'value' => '',
                'type' => 'text',
                'group' => 'whatsapp',
                'label' => 'Sender Number',
                'description' => 'WhatsApp sender number (with country code)',
            ],
            [
                'key' => 'whatsapp_welcome_message',
                'value' => 'Selamat datang di LPH Doa Bangsa Sukabumi! Terima kasih telah mendaftar.',
                'type' => 'textarea',
                'group' => 'whatsapp',
                'label' => 'Welcome Message',
                'description' => 'Message sent to new users after registration',
            ],
            [
                'key' => 'whatsapp_verification_message',
                'value' => 'Kode verifikasi Anda: {code}. Jangan bagikan kode ini kepada siapapun.',
                'type' => 'textarea',
                'group' => 'whatsapp',
                'label' => 'Verification Message',
                'description' => 'Message template for verification code (use {code} placeholder)',
            ],
            [
                'key' => 'whatsapp_payment_reminder',
                'value' => 'Halo {name}, ini adalah pengingat pembayaran invoice #{invoice_number} sebesar Rp {amount}. Silakan lakukan pembayaran sebelum {due_date}.',
                'type' => 'textarea',
                'group' => 'whatsapp',
                'label' => 'Payment Reminder Template',
                'description' => 'Template for payment reminders (use {name}, {invoice_number}, {amount}, {due_date})',
            ],
            [
                'key' => 'whatsapp_status_update',
                'value' => 'Halo {name}, status permohonan Anda telah diperbarui menjadi: {status}. Detail: {message}',
                'type' => 'textarea',
                'group' => 'whatsapp',
                'label' => 'Status Update Template',
                'description' => 'Template for submission status updates (use {name}, {status}, {message})',
            ],

            // Google reCAPTCHA v2 Settings
            [
                'key' => 'recaptcha_enabled',
                'value' => '0',
                'type' => 'boolean',
                'group' => 'recaptcha',
                'label' => 'Enable reCAPTCHA',
                'description' => 'Enable Google reCAPTCHA v2 on authentication pages',
            ],
            [
                'key' => 'recaptcha_site_key',
                'value' => '',
                'type' => 'text',
                'group' => 'recaptcha',
                'label' => 'reCAPTCHA Site Key',
                'description' => 'Google reCAPTCHA v2 site key',
            ],
            [
                'key' => 'recaptcha_secret_key',
                'value' => '',
                'type' => 'password',
                'group' => 'recaptcha',
                'label' => 'reCAPTCHA Secret Key',
                'description' => 'Google reCAPTCHA v2 secret key',
            ],

            // Appearance Settings
            [
                'key' => 'site_logo',
                'value' => '../img/logo.webp',
                'type' => 'file',
                'group' => 'appearance',
                'label' => 'Site Logo',
                'description' => 'Main logo for the website',
            ],
            [
                'key' => 'site_favicon',
                'value' => 'images/favicon.png',
                'type' => 'file',
                'group' => 'appearance',
                'label' => 'Site Favicon',
                'description' => 'Favicon (16x16 or 32x32 PNG)',
            ],
            [
                'key' => 'site_name',
                'value' => 'LPH Doa Bangsa Sukabumi',
                'type' => 'text',
                'group' => 'appearance',
                'label' => 'Site Name',
                'description' => 'Name of the website',
            ],
            [
                'key' => 'site_description',
                'value' => 'Lembaga Pelatihan Halal Doa Bangsa Sukabumi',
                'type' => 'textarea',
                'group' => 'appearance',
                'label' => 'Site Description',
                'description' => 'Short description of the website',
            ],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->updateOrInsert(
                ['key' => $setting['key']],
                $setting + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
