<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ALaMinute extends Model
{
    protected $table = 'a_la_minute';
    protected $fillable = ['title', 'content'];
}