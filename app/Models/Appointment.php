<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

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

    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }
}
