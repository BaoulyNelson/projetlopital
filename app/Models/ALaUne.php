<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ALaUne extends Model
{
    protected $table = 'a_la_une';
    protected $fillable = ['title', 'content'];
}