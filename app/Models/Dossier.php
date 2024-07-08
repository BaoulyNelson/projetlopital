<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'idconsultation',
        'date_enregistrement',
    ];

    /**
     * Get the consultation associated with the dossier.
     */
    public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'idconsultation');
    }

    public function patient()
{
    return $this->belongsTo(Patient::class, 'idconsultation');
}
}

