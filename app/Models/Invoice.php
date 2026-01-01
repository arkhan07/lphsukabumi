<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'submission_id',
        'user_id',
        'created_by',
        'invoice_number',
        'invoice_type',
        'invoice_title',
        'description',
        'invoice_date',
        'due_date',
        'subtotal',
        'tax_percentage',
        'tax_amount',
        'discount_percentage',
        'discount_amount',
        'total_amount',
        'paid_amount',
        'outstanding_amount',
        'currency',
        'line_items',
        'payment_term',
        'payment_days',
        'status',
        'payment_count',
        'first_payment_at',
        'fully_paid_at',
        'is_down_payment',
        'down_payment_percentage',
        'down_payment_invoice_id',
        'full_invoice_id',
        'sent_at',
        'viewed_at',
        'cancelled_at',
        'cancellation_reason',
        'notes',
        'terms_conditions',
        'invoice_file_path',
        'bank_name',
        'bank_account_number',
        'bank_account_name',
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'due_date' => 'date',
        'subtotal' => 'decimal:2',
        'tax_percentage' => 'decimal:2',
        'tax_amount' => 'decimal:2',
        'discount_percentage' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'outstanding_amount' => 'decimal:2',
        'line_items' => 'array',
        'payment_days' => 'integer',
        'payment_count' => 'integer',
        'is_down_payment' => 'boolean',
        'down_payment_percentage' => 'decimal:2',
        'first_payment_at' => 'datetime',
        'fully_paid_at' => 'datetime',
        'sent_at' => 'datetime',
        'viewed_at' => 'datetime',
        'cancelled_at' => 'datetime',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function payments()
    {
        return $this->hasMany(InvoicePayment::class);
    }

    public function downPaymentInvoice()
    {
        return $this->belongsTo(Invoice::class, 'down_payment_invoice_id');
    }

    public function fullInvoice()
    {
        return $this->belongsTo(Invoice::class, 'full_invoice_id');
    }

    public function auditorFees()
    {
        return $this->hasMany(AuditorFee::class);
    }
}
