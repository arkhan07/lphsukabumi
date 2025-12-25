<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Audit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'assignment_id',
        'schedule_id',
        'submission_id',
        'lead_auditor_id',
        'audit_number',
        'audit_type',
        'audit_scope',
        'audit_criteria',
        'audit_team',
        'planned_start_date',
        'planned_end_date',
        'actual_start_date',
        'actual_end_date',
        'audit_days',
        'opening_meeting_time',
        'opening_meeting_attendees',
        'opening_meeting_notes',
        'status',
        'progress_percentage',
        'areas_audited',
        'processes_audited',
        'personnel_interviewed',
        'total_findings',
        'critical_findings',
        'major_findings',
        'minor_findings',
        'observations',
        'opportunities_for_improvement',
        'closing_meeting_time',
        'closing_meeting_attendees',
        'closing_meeting_notes',
        'overall_result',
        'audit_conclusion',
        'recommendations',
        'audit_evidence',
        'audit_notes',
    ];

    protected $casts = [
        'planned_start_date' => 'date',
        'planned_end_date' => 'date',
        'actual_start_date' => 'date',
        'actual_end_date' => 'date',
        'opening_meeting_time' => 'datetime',
        'closing_meeting_time' => 'datetime',
        'audit_criteria' => 'array',
        'audit_team' => 'array',
        'opening_meeting_attendees' => 'array',
        'closing_meeting_attendees' => 'array',
        'areas_audited' => 'array',
        'processes_audited' => 'array',
        'personnel_interviewed' => 'array',
        'audit_evidence' => 'array',
    ];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function leadAuditor()
    {
        return $this->belongsTo(User::class, 'lead_auditor_id');
    }

    public function auditor()
    {
        return $this->belongsTo(User::class, 'lead_auditor_id');
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
