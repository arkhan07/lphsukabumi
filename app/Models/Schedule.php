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
        'auditor_id',
        'scheduled_date',
        'scheduled_time',
        'duration_hours',
        'location',
        'location_address',
        'location_latitude',
        'location_longitude',
        'audit_type',
        'status',
        'notes',
        'confirmation_status',
        'confirmed_by',
        'confirmed_at',
        'started_at',
        'completed_at',
        'cancellation_reason',
        'cancelled_by',
        'cancelled_at',
    ];

    protected $casts = [
        'scheduled_date' => 'date',
        'confirmed_at' => 'datetime',
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
        'cancelled_at' => 'datetime',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function auditor()
    {
        return $this->belongsTo(User::class, 'auditor_id');
    }

    public function audit()
    {
        return $this->hasOne(Audit::class);
    }
}
