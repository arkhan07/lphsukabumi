<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhrPromotion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'from_level',
        'to_level',
        'promotion_type',
        'pu_referred_count_at_promotion',
        'phr_recruited_count_at_promotion',
        'area_managers_count_at_promotion',
        'province_coverage_percentage',
        'status',
        'approved_by',
        'approved_at',
        'rejection_reason',
        'notes',
    ];

    protected $casts = [
        'approved_at' => 'datetime',
        'pu_referred_count_at_promotion' => 'integer',
        'phr_recruited_count_at_promotion' => 'integer',
        'area_managers_count_at_promotion' => 'integer',
        'province_coverage_percentage' => 'integer',
    ];

    /**
     * Get the user being promoted
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user who approved the promotion
     */
    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    /**
     * Get human-readable level name
     */
    public function getLevelNameAttribute()
    {
        return match($this->to_level) {
            'phr' => 'Pendamping Halal Reguler',
            'area_manager' => 'Manajer Area Kabupaten/Kota',
            'regional_manager' => 'Manajer Regional Provinsi',
            default => $this->to_level,
        };
    }
}
