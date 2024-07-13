<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class National extends Model
{
    protected $table = 'national';
    protected $fillable = ['title', 'content'];
}