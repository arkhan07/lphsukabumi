<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermRelationship extends Model
{
    protected $table = 'term_relationships';

    public function termTaxonomy()
    {
        return $this->belongsTo(TermTaxonomy::class, 'term_taxonomy_id', 'term_taxonomy_id');
    }
}
