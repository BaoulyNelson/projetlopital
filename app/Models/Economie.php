<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Economie extends Model
{
    protected $table = 'economie';
    protected $fillable = ['title', 'content'];
}