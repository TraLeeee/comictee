<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class TranslationTeamMember extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = ['member_id', 'title'];

    public function members()
    {
        return $this->hasMany(User::class);
    }
}
