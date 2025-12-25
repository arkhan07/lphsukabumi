<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'audit_id',
        'submission_id',
        'prepared_by',
        'report_number',
        'report_type',
        'report_title',
        'executive_summary',
        'audit_scope',
        'audit_objectives',
        'audit_criteria',
        'audit_methodology',
        'facility_description',
        'areas_audited',
        'facility_observations',
        'audit_team_details',
        'auditee_representatives',
        'total_findings',
        'critical_findings',
        'major_findings',
        'minor_findings',
        'observations',
        'findings_summary',
        'findings_detail',
        'finding_ids',
        'overall_result',
        'audit_conclusion',
        'strengths',
        'weaknesses',
        'recommendations',
        'halal_compliance_score',
        'halal_compliance_level',
        'halal_compliance_notes',
        'report_content',
        'attachments',
        'report_file_path',
        'status',
        'reviewed_by',
        'reviewed_at',
        'review_notes',
        'approved_by',
        'approved_at',
        'approval_notes',
        'submitted_to_fatwa',
        'submitted_to_fatwa_at',
        'submitted_to_bpjph',
        'submitted_to_bpjph_at',
        'version',
        'previous_version_id',
        'version_notes',
        'report_date',
        'validity_start_date',
        'validity_end_date',
    ];

    protected $casts = [
        'audit_objectives' => 'array',
        'audit_criteria' => 'array',
        'audit_methodology' => 'array',
        'areas_audited' => 'array',
        'audit_team_details' => 'array',
        'auditee_representatives' => 'array',
        'finding_ids' => 'array',
        'attachments' => 'array',
        'submitted_to_fatwa' => 'boolean',
        'submitted_to_bpjph' => 'boolean',
        'prepared_at' => 'datetime',
        'reviewed_at' => 'datetime',
        'approved_at' => 'datetime',
        'submitted_to_fatwa_at' => 'datetime',
        'submitted_to_bpjph_at' => 'datetime',
        'report_date' => 'date',
        'validity_start_date' => 'date',
        'validity_end_date' => 'date',
    ];

    public function audit()
    {
        return $this->belongsTo(Audit::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function preparedBy()
    {
        return $this->belongsTo(User::class, 'prepared_by');
    }

    public function reviewedBy()
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function previousVersion()
    {
        return $this->belongsTo(Report::class, 'previous_version_id');
    }

    public function findings()
    {
        return $this->hasMany(Finding::class, 'audit_id', 'audit_id');
    }
}
