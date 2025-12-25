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
        'uploaded_by',
        'document_type',
        'document_category',
        'document_name',
        'description',
        'file_path',
        'file_name',
        'file_extension',
        'file_size',
        'mime_type',
        'status',
        'reviewed_by',
        'reviewed_at',
        'review_notes',
        'version',
        'parent_document_id',
        'is_latest_version',
        'valid_from',
        'valid_until',
        'is_expired',
        'is_required',
        'is_public',
        'download_count',
        'tags',
    ];

    protected $casts = [
        'reviewed_at' => 'datetime',
        'valid_from' => 'date',
        'valid_until' => 'date',
        'is_latest_version' => 'boolean',
        'is_expired' => 'boolean',
        'is_required' => 'boolean',
        'is_public' => 'boolean',
        'download_count' => 'integer',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    public function parentDocument()
    {
        return $this->belongsTo(Document::class, 'parent_document_id');
    }

    public function childDocuments()
    {
        return $this->hasMany(Document::class, 'parent_document_id');
    }
}
