<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=[
        'appointment_id',
        'date_hour',
        'status',
        'motive',
        'floor_num',
        'oberservations',
        // medico
        // enfermero
        // paciente
    ];
}
