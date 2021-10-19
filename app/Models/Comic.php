<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Comic extends Model
{
    use SoftDeletes, HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = ['title', 'description', 'cover_image', 'thumbnail', 'user_id', 'translation_team_id', 'author_id'];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function translationTeam()
    {
        return $this->belongsTo(TranslationTeam::class, 'translation_team_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
