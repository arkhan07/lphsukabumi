<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Audit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'schedule_id',
        'submission_id',
        'auditor_id',
        'audit_date',
        'audit_start_time',
        'audit_end_time',
        'location',
        'audit_type',
        'audit_scope',
        'audit_result',
        'compliance_score',
        'recommendations',
        'conclusion',
        'next_steps',
        'status',
        'reviewed_by',
        'reviewed_at',
        'review_notes',
    ];

    protected $casts = [
        'audit_date' => 'date',
        'reviewed_at' => 'datetime',
        'compliance_score' => 'decimal:2',
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function auditor()
    {
        return $this->belongsTo(User::class, 'auditor_id');
    }

    public function findings()
    {
        return $this->hasMany(Finding::class);
    }

    public function report()
    {
        return $this->hasOne(Report::class);
    }
}
