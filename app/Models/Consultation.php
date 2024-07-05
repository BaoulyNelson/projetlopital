<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idmedecin',
        'idpatient',
        'poids',
        'hauteur',
        'diagnostique',
        'date_consultation',
    ];

    /**
     * Get the patient associated with the consultation.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'idpatient');
    }

    /**
     * Get the doctor associated with the consultation.
     */
    public function medecin()
    {
        return $this->belongsTo(Medecin::class, 'idmedecin');
    }
}