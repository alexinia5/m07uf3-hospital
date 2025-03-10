<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=[
        'appointment_id',
        'date_hour',
        'motive',
        'floor_num',
        'observations',
    ];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function nurses()
    {
        return $this->belongsTo(Nurse::class);
    }

    public function pacients()
    {
        return $this->belongsTo(Patient::class);
    }
}
