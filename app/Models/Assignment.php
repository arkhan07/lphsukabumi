<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assignment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'submission_id',
        'auditor_id',
        'assigned_by',
        'assignment_number',
        'assignment_type',
        'audit_scope',
        'products_to_audit',
        'processes_to_audit',
        'special_instructions',
        'team_leader_id',
        'team_members',
        'estimated_person_days',
        'status',
        'rejection_reason',
        'assignment_date',
        'expected_start_date',
        'expected_completion_date',
        'actual_start_date',
        'actual_completion_date',
        'accepted_at',
        'acceptance_notes',
        'progress_percentage',
        'current_phase',
        'notes',
    ];

    protected $casts = [
        'assignment_date' => 'date',
        'expected_start_date' => 'date',
        'expected_completion_date' => 'date',
        'actual_start_date' => 'date',
        'actual_completion_date' => 'date',
        'accepted_at' => 'datetime',
        'products_to_audit' => 'array',
        'processes_to_audit' => 'array',
        'team_members' => 'array',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function auditor()
    {
        return $this->belongsTo(User::class, 'auditor_id');
    }

    public function assignedBy()
    {
        return $this->belongsTo(User::class, 'assigned_by');
    }

    public function teamLeader()
    {
        return $this->belongsTo(User::class, 'team_leader_id');
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function audits()
    {
        return $this->hasMany(Audit::class);
    }
}
