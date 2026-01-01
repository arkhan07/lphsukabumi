<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhrPromotionCriteria extends Model
{
    use HasFactory;

    protected $table = 'phr_promotion_criteria';

    protected $fillable = [
        'target_level',
        'min_pu_referred',
        'min_phr_recruited',
        'min_area_managers',
        'min_province_coverage_percentage',
        'is_active',
        'notes',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'min_pu_referred' => 'integer',
        'min_phr_recruited' => 'integer',
        'min_area_managers' => 'integer',
        'min_province_coverage_percentage' => 'integer',
    ];

    /**
     * Get active criteria for a level
     */
    public static function getForLevel($level)
    {
        return static::where('target_level', $level)
            ->where('is_active', true)
            ->first();
    }

    /**
     * Check if user meets criteria for this level
     */
    public function userMeetsCriteria(User $user)
    {
        // Check PU referred
        if ($user->pu_referred_count < $this->min_pu_referred) {
            return false;
        }

        // Check PHR recruited (for Area Manager)
        if ($this->target_level === 'area_manager') {
            if ($user->phr_active_recruited_count < $this->min_phr_recruited) {
                return false;
            }
        }

        // Check Area Managers count (for Regional Manager)
        if ($this->target_level === 'regional_manager') {
            if ($user->area_managers_count < $this->min_area_managers) {
                return false;
            }

            // Check province coverage
            $coverage = $user->calculateProvinceCoverage();
            if ($coverage < $this->min_province_coverage_percentage) {
                return false;
            }
        }

        return true;
    }
}
