<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';

    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
