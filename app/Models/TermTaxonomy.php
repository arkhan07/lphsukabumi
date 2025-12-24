<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermTaxonomy extends Model
{
    protected $table = 'term_taxonomy';
    protected $primaryKey = 'term_taxonomy_id';

    public function termRelationships()
    {
        return $this->hasMany(TermRelationship::class, 'term_taxonomy_id', 'term_taxonomy_id');
    }
}
