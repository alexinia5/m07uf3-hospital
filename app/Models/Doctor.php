<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
        'doctor_id',
        'dni',
        'gender',
        'name',
        'phone',
        'position',
    ];

    public function pacients()
    {
        return $this->belongsToMany(Pacient::class);
    }

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

    public function specialtiesBoss()
	{
		return $this->hasMany(Specialty::class);
	}

    public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}

    public function emergencies()
    {
        return $this->belongsToMany(Emergency::class);
    }
}
