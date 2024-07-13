<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    protected $table = 'culture';
    protected $fillable = ['title', 'content'];
}
