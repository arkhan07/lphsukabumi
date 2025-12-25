<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Finding extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'audit_id',
        'submission_id',
        'auditor_id',
        'finding_number',
        'finding_type',
        'severity',
        'title',
        'description',
        'evidence',
        'photo_evidence',
        'location',
        'area_department',
        'requirement_reference',
        'criteria_not_met',
        'root_cause',
        'contributing_factors',
        'requires_corrective_action',
        'proposed_corrective_action',
        'responsible_person_id',
        'target_completion_date',
        'auditee_response',
        'corrective_action_taken',
        'action_completed_date',
        'action_evidence',
        'action_verification_notes',
        'action_status',
        'is_verified',
        'verified_by',
        'verified_at',
        'verification_notes',
        'requires_followup_audit',
        'followup_audit_date',
        'followup_notes',
        'risk_level',
        'risk_impact',
        'status',
        'remarks',
    ];

    protected $casts = [
        'photo_evidence' => 'array',
        'action_evidence' => 'array',
        'requires_corrective_action' => 'boolean',
        'target_completion_date' => 'date',
        'action_completed_date' => 'date',
        'followup_audit_date' => 'date',
        'is_verified' => 'boolean',
        'verified_at' => 'datetime',
        'requires_followup_audit' => 'boolean',
    ];

    public function audit()
    {
        return $this->belongsTo(Audit::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function auditor()
    {
        return $this->belongsTo(User::class, 'auditor_id');
    }

    public function responsiblePerson()
    {
        return $this->belongsTo(User::class, 'responsible_person_id');
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}
