<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    protected $apiUrl;
    protected $apiKey;
    protected $senderNumber;
    protected $enabled;

    public function __construct()
    {
        $this->enabled = Setting::get('whatsapp_enabled', '0') === '1';
        $this->apiUrl = Setting::get('whatsapp_api_url', '');
        $this->apiKey = Setting::get('whatsapp_api_key', '');
        $this->senderNumber = Setting::get('whatsapp_sender_number', '');
    }

    /**
     * Check if WhatsApp service is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled && !empty($this->apiUrl) && !empty($this->apiKey);
    }

    /**
     * Normalize phone number to international format
     *
     * @param string $phone
     * @return string
     */
    protected function normalizePhoneNumber($phone)
    {
        // Remove all non-numeric characters
        $phone = preg_replace('/[^0-9]/', '', $phone);

        // Convert Indonesian numbers to international format
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        } elseif (str_starts_with($phone, '8')) {
            $phone = '62' . $phone;
        } elseif (!str_starts_with($phone, '62')) {
            $phone = '62' . $phone;
        }

        return $phone;
    }

    /**
     * Replace template variables with actual values
     *
     * @param string $template
     * @param array $variables
     * @return string
     */
    protected function replaceVariables($template, array $variables)
    {
        foreach ($variables as $key => $value) {
            $template = str_replace('{' . $key . '}', $value, $template);
        }

        return $template;
    }

    /**
     * Send a text message via WhatsApp
     *
     * @param string $to Phone number
     * @param string $message Message content
     * @return array
     */
    public function sendMessage($to, $message)
    {
        if (!$this->isEnabled()) {
            Log::warning('WhatsApp service is disabled or not configured');
            return [
                'success' => false,
                'message' => 'WhatsApp service is not configured or disabled'
            ];
        }

        try {
            $to = $this->normalizePhoneNumber($to);

            $payload = [
                'recipient_type' => 'individual',
                'to' => $to,
                'type' => 'text',
                'text' => [
                    'body' => $message
                ]
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post($this->apiUrl, $payload);

            if ($response->successful()) {
                Log::info('WhatsApp message sent successfully', [
                    'to' => $to,
                    'message' => $message
                ]);

                return [
                    'success' => true,
                    'message' => 'Message sent successfully',
                    'data' => $response->json()
                ];
            } else {
                Log::error('Failed to send WhatsApp message', [
                    'to' => $to,
                    'status' => $response->status(),
                    'response' => $response->body()
                ]);

                return [
                    'success' => false,
                    'message' => 'Failed to send message: ' . $response->body()
                ];
            }
        } catch (\Exception $e) {
            Log::error('WhatsApp service exception', [
                'to' => $to,
                'error' => $e->getMessage()
            ]);

            return [
                'success' => false,
                'message' => 'Exception: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Send an image via WhatsApp
     *
     * @param string $to Phone number
     * @param string $imageUrl Image URL
     * @param string $caption Optional caption
     * @return array
     */
    public function sendImage($to, $imageUrl, $caption = '')
    {
        if (!$this->isEnabled()) {
            return [
                'success' => false,
                'message' => 'WhatsApp service is not configured or disabled'
            ];
        }

        try {
            $to = $this->normalizePhoneNumber($to);

            $payload = [
                'recipient_type' => 'individual',
                'to' => $to,
                'type' => 'image',
                'image' => [
                    'link' => $imageUrl,
                    'caption' => $caption
                ]
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post($this->apiUrl, $payload);

            if ($response->successful()) {
                return [
                    'success' => true,
                    'message' => 'Image sent successfully',
                    'data' => $response->json()
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Failed to send image: ' . $response->body()
                ];
            }
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Exception: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Send a document via WhatsApp
     *
     * @param string $to Phone number
     * @param string $documentUrl Document URL
     * @param string $filename Filename
     * @param string $caption Optional caption
     * @return array
     */
    public function sendDocument($to, $documentUrl, $filename, $caption = '')
    {
        if (!$this->isEnabled()) {
            return [
                'success' => false,
                'message' => 'WhatsApp service is not configured or disabled'
            ];
        }

        try {
            $to = $this->normalizePhoneNumber($to);

            $payload = [
                'recipient_type' => 'individual',
                'to' => $to,
                'type' => 'document',
                'document' => [
                    'link' => $documentUrl,
                    'filename' => $filename,
                    'caption' => $caption
                ]
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post($this->apiUrl, $payload);

            if ($response->successful()) {
                return [
                    'success' => true,
                    'message' => 'Document sent successfully',
                    'data' => $response->json()
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Failed to send document: ' . $response->body()
                ];
            }
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Exception: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Send welcome message to new user
     *
     * @param \App\Models\User $user
     * @return array
     */
    public function sendWelcomeMessage($user)
    {
        $template = Setting::get('whatsapp_welcome_message', 'Selamat datang di LPH Doa Bangsa Sukabumi!');

        $message = $this->replaceVariables($template, [
            'name' => $user->name,
            'email' => $user->email,
        ]);

        $phone = $user->whatsapp ?? $user->phone;

        if (empty($phone)) {
            return [
                'success' => false,
                'message' => 'User has no phone number'
            ];
        }

        return $this->sendMessage($phone, $message);
    }

    /**
     * Send verification code
     *
     * @param string $to Phone number
     * @param string $code Verification code
     * @return array
     */
    public function sendVerificationCode($to, $code)
    {
        $template = Setting::get('whatsapp_verification_message', 'Kode verifikasi Anda: {code}');

        $message = $this->replaceVariables($template, [
            'code' => $code,
        ]);

        return $this->sendMessage($to, $message);
    }

    /**
     * Send payment reminder
     *
     * @param \App\Models\User $user
     * @param string $invoiceNumber
     * @param float $amount
     * @param string $dueDate
     * @return array
     */
    public function sendPaymentReminder($user, $invoiceNumber, $amount, $dueDate)
    {
        $template = Setting::get('whatsapp_payment_reminder',
            'Halo {name}, ini adalah pengingat pembayaran invoice #{invoice_number} sebesar Rp {amount}.');

        $message = $this->replaceVariables($template, [
            'name' => $user->name,
            'invoice_number' => $invoiceNumber,
            'amount' => number_format($amount, 0, ',', '.'),
            'due_date' => $dueDate,
        ]);

        $phone = $user->whatsapp ?? $user->phone;

        if (empty($phone)) {
            return [
                'success' => false,
                'message' => 'User has no phone number'
            ];
        }

        return $this->sendMessage($phone, $message);
    }

    /**
     * Send status update notification
     *
     * @param \App\Models\User $user
     * @param string $status
     * @param string $detailMessage
     * @return array
     */
    public function sendStatusUpdate($user, $status, $detailMessage = '')
    {
        $template = Setting::get('whatsapp_status_update',
            'Halo {name}, status permohonan Anda telah diperbarui menjadi: {status}.');

        $message = $this->replaceVariables($template, [
            'name' => $user->name,
            'status' => $status,
            'message' => $detailMessage,
        ]);

        $phone = $user->whatsapp ?? $user->phone;

        if (empty($phone)) {
            return [
                'success' => false,
                'message' => 'User has no phone number'
            ];
        }

        return $this->sendMessage($phone, $message);
    }
}
