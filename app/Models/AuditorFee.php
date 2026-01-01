<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuditorFee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'auditor_id',
        'invoice_id',
        'submission_id',
        'invoice_amount',
        'fee_percentage',
        'fee_amount',
        'status',
        'paid_amount',
        'approved_at',
        'paid_at',
        'approved_by',
        'paid_by',
        'notes',
        'payment_reference',
    ];

    protected $casts = [
        'invoice_amount' => 'decimal:2',
        'fee_percentage' => 'decimal:2',
        'fee_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'approved_at' => 'datetime',
        'paid_at' => 'datetime',
    ];

    /**
     * Get the auditor that owns the fee
     */
    public function auditor()
    {
        return $this->belongsTo(User::class, 'auditor_id');
    }

    /**
     * Get the invoice associated with the fee
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    /**
     * Get the submission associated with the fee
     */
    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    /**
     * Get the user who approved the fee
     */
    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    /**
     * Get the user who paid the fee
     */
    public function paidBy()
    {
        return $this->belongsTo(User::class, 'paid_by');
    }
}
