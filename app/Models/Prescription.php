<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idconsultation',
        'prescription',
    ];

    /**
     * Get the consultation associated with the prescription.
     */
    public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'idconsultation');
    }
}