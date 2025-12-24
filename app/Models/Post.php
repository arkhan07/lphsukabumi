<?php // File: app/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Corcel\Model\Post as Corcel;

class Post extends Corcel
{
    protected $connection = 'wordpress';
    protected $table = 'posts';
    protected $primaryKey = 'ID';

    public function termRelationships()
    {
        return $this->hasMany(TermRelationship::class, 'object_id', 'ID');
    }
}