<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';
}
