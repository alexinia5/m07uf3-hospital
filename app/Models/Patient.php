<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable=[
        'patient_id',
        'dni',
        'gender',
        'name',
        'phone',
        'address',
        'cp',
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