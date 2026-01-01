<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhrFee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'phr_id',
        'invoice_id',
        'pelaku_usaha_id',
        'submission_id',
        'invoice_amount',
        'fee_type',
        'fee_percentage',
        'fee_amount',
        'direct_phr_id',
        'area_manager_id',
        'regional_manager_id',
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
     * Get the PHR that owns the fee
     */
    public function phr()
    {
        return $this->belongsTo(User::class, 'phr_id');
    }

    /**
     * Get the invoice associated with the fee
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    /**
     * Get the pelaku usaha
     */
    public function pelakuUsaha()
    {
        return $this->belongsTo(User::class, 'pelaku_usaha_id');
    }

    /**
     * Get the submission
     */
    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    /**
     * Get the direct PHR
     */
    public function directPhr()
    {
        return $this->belongsTo(User::class, 'direct_phr_id');
    }

    /**
     * Get the area manager
     */
    public function areaManager()
    {
        return $this->belongsTo(User::class, 'area_manager_id');
    }

    /**
     * Get the regional manager
     */
    public function regionalManager()
    {
        return $this->belongsTo(User::class, 'regional_manager_id');
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
