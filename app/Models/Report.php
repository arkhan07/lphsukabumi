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
        'report_number',
        'report_type',
        'report_title',
        'executive_summary',
        'audit_scope',
        'methodology',
        'findings_summary',
        'recommendations',
        'conclusion',
        'file_path',
        'status',
        'prepared_by',
        'prepared_at',
        'reviewed_by',
        'reviewed_at',
        'approved_by',
        'approved_at',
        'review_notes',
        'approval_notes',
    ];

    protected $casts = [
        'prepared_at' => 'datetime',
        'reviewed_at' => 'datetime',
        'approved_at' => 'datetime',
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
}
