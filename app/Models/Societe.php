<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $table = 'societe';
    protected $fillable = ['title', 'content'];
}