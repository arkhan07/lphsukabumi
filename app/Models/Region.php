<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'province',
        'city',
        'district',
        'postal_code',
    ];

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
