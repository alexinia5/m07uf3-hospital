<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=[
        'patient_id',
        'dni',
        'gender',
        'name',
        'phone',
        'address',
        'cd',
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}

    public function emergencies()
    {
        return $this->belongsTo(Emergency::class);
    }

    public function medicalHistory()
	{
		return $this->hasOne(MedicalHistory::class);
	}

    public function room()
	{
		return $this->belongsTo(Room::class);
	}
}