<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Comic extends Model
{
    protected $connection = 'mongodb';
}
