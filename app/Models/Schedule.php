<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'assignment_id',
        'submission_id',
        'created_by',
        'title',
        'description',
        'activity_type',
        'schedule_date',
        'start_time',
        'end_time',
        'duration_minutes',
        'location',
        'location_address',
        'meeting_room',
        'auditor_ids',
        'auditee_ids',
        'external_participants',
        'agenda_items',
        'objectives',
        'preparation_needed',
        'status',
        'cancellation_reason',
        'rescheduled_from_id',
        'reschedule_count',
        'reschedule_reason',
        'is_confirmed',
        'confirmed_at',
        'confirmed_by',
        'send_reminder',
        'reminder_hours_before',
        'reminder_sent',
        'reminder_sent_at',
        'actual_start_time',
        'actual_end_time',
        'completion_notes',
    ];

    protected $casts = [
        'schedule_date' => 'date',
        'auditor_ids' => 'array',
        'auditee_ids' => 'array',
        'agenda_items' => 'array',
        'is_confirmed' => 'boolean',
        'confirmed_at' => 'datetime',
        'send_reminder' => 'boolean',
        'reminder_sent' => 'boolean',
        'reminder_sent_at' => 'datetime',
        'actual_start_time' => 'datetime',
        'actual_end_time' => 'datetime',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function auditors()
    {
        return $this->belongsToMany(User::class, 'auditor_ids');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function confirmedBy()
    {
        return $this->belongsTo(User::class, 'confirmed_by');
    }

    public function rescheduledFrom()
    {
        return $this->belongsTo(Schedule::class, 'rescheduled_from_id');
    }

    public function audit()
    {
        return $this->hasOne(Audit::class);
    }
}
