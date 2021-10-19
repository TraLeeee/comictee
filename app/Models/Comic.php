<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Comic extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';

    protected $fillable = ['title', 'description', 'cover_image', 'thumbnail', 'translation_team_id', 'author_id'];
}
