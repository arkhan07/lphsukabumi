<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Define the relationship with Taxonomy model
    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }
}
