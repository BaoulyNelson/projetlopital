<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['type', 'title', 'subtitle', 'description', 'button_text', 'content'];
    
    // Ajoutez ici d'autres propriétés et méthodes nécessaires
}
