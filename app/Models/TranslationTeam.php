<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class TranslationTeam extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = ['name', 'description', 'owner_id'];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
