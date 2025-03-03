<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urgency extends Model
{
    protected $fillable=[
        'urgency_id',
        'date',
        'level',
        'diagnosis',
        'floor_num',
        // medico
        // enfermero
        // paciente
    ];
}
