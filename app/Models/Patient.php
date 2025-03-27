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
        'dni',
        'gender',
        'name',
        'phone',
        'address',
        'cp',
        'patient_id',
    ];

    public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}

    public function emergencies()
    {
        return $this->hasOne(Emergency::class);
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