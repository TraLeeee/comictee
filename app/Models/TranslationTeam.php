<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class TranslationTeam extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = ['name', 'description', 'owner_id'];
}
