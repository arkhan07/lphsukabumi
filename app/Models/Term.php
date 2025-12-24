<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';
    protected $primaryKey = 'term_id';
    public $timestamps = false;

    // Define other attributes and relationships as needed
}
