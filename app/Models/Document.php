<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'submission_id',
        'user_id',
        'document_type',
        'document_name',
        'file_name',
        'file_path',
        'file_size',
        'mime_type',
        'description',
        'verification_status',
        'verified_by',
        'verified_at',
        'verification_notes',
        'is_required',
        'version',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
        'is_required' => 'boolean',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}
