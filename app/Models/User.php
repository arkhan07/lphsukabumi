<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'whatsapp',
        'profile_photo',
        'address',
        'business_name',
        'bank_name',
        'bank_account_number',
        'bank_account_holder',
        'referral_code',
        'referred_by',
        'phr_level',
        'phr_recruited_count',
        'phr_active_recruited_count',
        'pu_referred_count',
        'area_managers_count',
        'province',
        'city',
        'district',
        'is_phr_active',
        'phr_joined_at',
        'last_promotion_at',
        'recruited_by_phr',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phr_joined_at' => 'datetime',
        'last_promotion_at' => 'datetime',
        'is_phr_active' => 'boolean',
        'phr_recruited_count' => 'integer',
        'phr_active_recruited_count' => 'integer',
        'pu_referred_count' => 'integer',
        'area_managers_count' => 'integer',
    ];

    /**
     * Get the roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    /**
     * Get the submissions for the user.
     */
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    /**
     * Check if user has a specific role.
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('slug', $role);
        }

        if (is_array($role)) {
            foreach ($role as $r) {
                if ($this->hasRole($r)) {
                    return true;
                }
            }
            return false;
        }

        return $this->roles->contains($role);
    }

    /**
     * Check if user has any of the given roles.
     */
    public function hasAnyRole($roles)
    {
        return $this->hasRole($roles);
    }

    /**
     * Check if user has all of the given roles.
     */
    public function hasAllRoles($roles)
    {
        if (is_string($roles)) {
            return $this->hasRole($roles);
        }

        foreach ($roles as $role) {
            if (!$this->hasRole($role)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Assign role to user.
     */
    public function assignRole($role)
    {
        if (is_string($role)) {
            $role = Role::where('slug', $role)->firstOrFail();
        }

        return $this->roles()->syncWithoutDetaching($role);
    }

    /**
     * Remove role from user.
     */
    public function removeRole($role)
    {
        if (is_string($role)) {
            $role = Role::where('slug', $role)->firstOrFail();
        }

        return $this->roles()->detach($role);
    }

    /**
     * Check if user has a specific permission.
     */
    public function hasPermission($permission)
    {
        foreach ($this->roles as $role) {
            if ($role->hasPermission($permission)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if user has any of the given permissions.
     */
    public function hasAnyPermission($permissions)
    {
        if (is_string($permissions)) {
            return $this->hasPermission($permissions);
        }

        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if user has all of the given permissions.
     */
    public function hasAllPermissions($permissions)
    {
        if (is_string($permissions)) {
            return $this->hasPermission($permissions);
        }

        foreach ($permissions as $permission) {
            if (!$this->hasPermission($permission)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get all permissions through roles.
     */
    public function getAllPermissions()
    {
        $permissions = collect();

        foreach ($this->roles as $role) {
            $permissions = $permissions->merge($role->permissions);
        }

        return $permissions->unique('id');
    }

    /**
     * Get profile photo URL with fallback to default avatar
     *
     * @return string
     */
    public function getProfilePhotoUrlAttribute()
    {
        if ($this->profile_photo && file_exists(public_path($this->profile_photo))) {
            return asset($this->profile_photo);
        }

        // Generate initials-based avatar using UI Avatars
        $name = urlencode($this->name);
        return "https://ui-avatars.com/api/?name={$name}&size=200&background=166F61&color=ffffff&bold=true";
    }

    /**
     * Alias for profile_photo column to match view expectations
     *
     * @return string|null
     */
    public function getProfilePhotoPathAttribute()
    {
        return $this->profile_photo;
    }

    /**
     * Get the user who referred this user
     */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referred_by');
    }

    /**
     * Get users referred by this user
     */
    public function referrals()
    {
        return $this->hasMany(User::class, 'referred_by');
    }

    /**
     * Get auditor fees
     */
    public function auditorFees()
    {
        return $this->hasMany(AuditorFee::class, 'auditor_id');
    }

    /**
     * Get invoices (for pelaku usaha)
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'user_id');
    }

    /**
     * Generate unique referral code
     */
    public static function generateReferralCode($prefix = 'PU')
    {
        do {
            $code = $prefix . strtoupper(substr(uniqid(), -6));
        } while (self::where('referral_code', $code)->exists());

        return $code;
    }

    /**
     * Ensure user has referral code
     */
    public function ensureReferralCode($prefix = 'PU')
    {
        if (!$this->referral_code) {
            $this->referral_code = self::generateReferralCode($prefix);
            $this->save();
        }

        return $this->referral_code;
    }

    /* ========== PHR SYSTEM METHODS & RELATIONSHIPS ========== */

    /**
     * Get PHR fees
     */
    public function phrFees()
    {
        return $this->hasMany(PhrFee::class, 'phr_id');
    }

    /**
     * Get PHR promotions
     */
    public function phrPromotions()
    {
        return $this->hasMany(PhrPromotion::class);
    }

    /**
     * Get PHR who recruited this user
     */
    public function recruiter()
    {
        return $this->belongsTo(User::class, 'recruited_by_phr');
    }

    /**
     * Get PHRs recruited by this user
     */
    public function recruitedPhrs()
    {
        return $this->hasMany(User::class, 'recruited_by_phr')->where('phr_level', '!=', 'none');
    }

    /**
     * Get active PHRs recruited by this user
     */
    public function activeRecruitedPhrs()
    {
        return $this->recruitedPhrs()->where('is_phr_active', true);
    }

    /**
     * Get Pelaku Usaha referred by this user (for PHR)
     */
    public function referredPelakuUsaha()
    {
        return $this->hasMany(User::class, 'referred_by')
            ->whereHas('roles', function($q) {
                $q->where('slug', 'pelaku-usaha');
            });
    }

    /**
     * Check if user is PHR
     */
    public function isPhr()
    {
        return $this->phr_level !== 'none';
    }

    /**
     * Check if user is Area Manager
     */
    public function isAreaManager()
    {
        return $this->phr_level === 'area_manager' || $this->phr_level === 'regional_manager';
    }

    /**
     * Check if user is Regional Manager
     */
    public function isRegionalManager()
    {
        return $this->phr_level === 'regional_manager';
    }

    /**
     * Get PHR level name
     */
    public function getPhrLevelNameAttribute()
    {
        return match($this->phr_level) {
            'phr' => 'Pendamping Halal Reguler',
            'area_manager' => 'Manajer Area Kabupaten/Kota',
            'regional_manager' => 'Manajer Regional Provinsi',
            default => '-',
        };
    }

    /**
     * Calculate province coverage for Regional Manager promotion
     */
    public function calculateProvinceCoverage()
    {
        if (!$this->province) {
            return 0;
        }

        // Get total cities/districts in the province
        $totalCities = User::where('province', $this->province)
            ->whereNotNull('city')
            ->distinct('city')
            ->count('city');

        if ($totalCities == 0) {
            return 0;
        }

        // Get cities covered by Area Managers under this user
        $coveredCities = User::where('recruited_by_phr', $this->id)
            ->where('phr_level', 'area_manager')
            ->where('province', $this->province)
            ->whereNotNull('city')
            ->distinct('city')
            ->count('city');

        return ($coveredCities / $totalCities) * 100;
    }

    /**
     * Update PHR statistics
     */
    public function updatePhrStats()
    {
        // Update recruited PHRs count
        $this->phr_recruited_count = $this->recruitedPhrs()->count();
        $this->phr_active_recruited_count = $this->activeRecruitedPhrs()->count();

        // Update PU referred count
        $this->pu_referred_count = $this->referredPelakuUsaha()->count();

        // Update Area Managers count (for Regional Manager)
        if ($this->isAreaManager()) {
            $this->area_managers_count = $this->recruitedPhrs()
                ->where('phr_level', 'area_manager')
                ->count();
        }

        $this->save();
    }

    /**
     * Check if eligible for promotion
     */
    public function checkPromotionEligibility()
    {
        // Update stats first
        $this->updatePhrStats();

        $eligibleFor = null;

        // Check for Area Manager promotion
        if ($this->phr_level === 'phr') {
            $criteria = PhrPromotionCriteria::getForLevel('area_manager');
            if ($criteria && $criteria->userMeetsCriteria($this)) {
                $eligibleFor = 'area_manager';
            }
        }

        // Check for Regional Manager promotion
        if ($this->phr_level === 'area_manager') {
            $criteria = PhrPromotionCriteria::getForLevel('regional_manager');
            if ($criteria && $criteria->userMeetsCriteria($this)) {
                $eligibleFor = 'regional_manager';
            }
        }

        return $eligibleFor;
    }

    /**
     * Auto-promote if eligible
     */
    public function autoPromote()
    {
        $eligibleFor = $this->checkPromotionEligibility();

        if (!$eligibleFor) {
            return null;
        }

        // Create promotion record
        $promotion = PhrPromotion::create([
            'user_id' => $this->id,
            'from_level' => $this->phr_level,
            'to_level' => $eligibleFor,
            'promotion_type' => 'auto',
            'pu_referred_count_at_promotion' => $this->pu_referred_count,
            'phr_recruited_count_at_promotion' => $this->phr_active_recruited_count,
            'area_managers_count_at_promotion' => $this->area_managers_count,
            'province_coverage_percentage' => $eligibleFor === 'regional_manager' ? $this->calculateProvinceCoverage() : 0,
            'status' => 'approved',
            'approved_at' => now(),
        ]);

        // Update user level
        $this->phr_level = $eligibleFor;
        $this->last_promotion_at = now();
        $this->save();

        return $promotion;
    }
}
