<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Submission extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'submission_number',
        'user_id',
        'company_name',
        'company_email',
        'company_phone',
        'company_address',
        'region_id',
        'business_type_id',
        'npwp',
        'nib',
        'halal_certificate_number',
        'production_location',
        'location_latitude',
        'location_longitude',
        'employee_count',
        'production_capacity',
        'production_capacity_unit',
        'certification_type',
        'submission_date',
        'target_completion_date',
        'status',
        'rejection_reason',
        'notes',
        'profile_completed',
        'products_completed',
        'materials_completed',
        'processes_completed',
        'documents_completed',
        'completeness_percentage',
        'submitted_at',
        'screening_completed_at',
        'verification_completed_at',
        'assigned_at',
        'audit_completed_at',
        'report_submitted_at',
        'submitted_to_fatwa_at',
        'submitted_to_bpjph_at',
        'approved_at',
        'completed_at',
        'is_locked',
        'locked_by',
        'locked_at',
        'lock_reason',
    ];

    protected $casts = [
        'submission_date' => 'date',
        'target_completion_date' => 'date',
        'location_latitude' => 'decimal:8',
        'location_longitude' => 'decimal:8',
        'employee_count' => 'integer',
        'production_capacity' => 'decimal:2',
        'profile_completed' => 'boolean',
        'products_completed' => 'boolean',
        'materials_completed' => 'boolean',
        'processes_completed' => 'boolean',
        'documents_completed' => 'boolean',
        'completeness_percentage' => 'integer',
        'is_locked' => 'boolean',
        'submitted_at' => 'datetime',
        'screening_completed_at' => 'datetime',
        'verification_completed_at' => 'datetime',
        'assigned_at' => 'datetime',
        'audit_completed_at' => 'datetime',
        'report_submitted_at' => 'datetime',
        'submitted_to_fatwa_at' => 'datetime',
        'submitted_to_bpjph_at' => 'datetime',
        'approved_at' => 'datetime',
        'completed_at' => 'datetime',
        'locked_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function businessType()
    {
        return $this->belongsTo(BusinessType::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function audits()
    {
        return $this->hasMany(Audit::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function lockedBy()
    {
        return $this->belongsTo(User::class, 'locked_by');
    }
}
