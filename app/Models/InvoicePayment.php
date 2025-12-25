<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoicePayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invoice_id',
        'user_id',
        'verified_by',
        'payment_number',
        'amount',
        'currency',
        'payment_method',
        'bank_name',
        'account_number',
        'account_holder_name',
        'transfer_reference_number',
        'payment_date',
        'payment_time',
        'payment_proof_path',
        'notes',
        'status',
        'verified_at',
        'verification_notes',
        'rejection_reason',
        'receipt_file_path',
        'receipt_sent',
        'receipt_sent_at',
    ];

    protected $casts = [
        'payment_date' => 'date',
        'payment_time' => 'datetime',
        'amount' => 'decimal:2',
        'verified_at' => 'datetime',
        'receipt_sent' => 'boolean',
        'receipt_sent_at' => 'datetime',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}
