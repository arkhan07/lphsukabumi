<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionBranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'submission_id',
        'branch_address',
        'branch_name',
        'branch_phone',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
