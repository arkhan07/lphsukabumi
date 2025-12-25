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
        'category',
        'severity',
        'finding_description',
        'evidence',
        'recommendation',
        'corrective_action',
        'responsible_person',
        'target_date',
        'status',
        'resolution_notes',
        'resolved_by',
        'resolved_at',
        'verified_by',
        'verified_at',
        'verification_notes',
    ];

    protected $casts = [
        'target_date' => 'date',
        'resolved_at' => 'datetime',
        'verified_at' => 'datetime',
    ];

    public function audit()
    {
        return $this->belongsTo(Audit::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function resolvedBy()
    {
        return $this->belongsTo(User::class, 'resolved_by');
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}
