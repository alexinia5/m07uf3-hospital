<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable=[
        'dni',
        'gender',
        'name',
        'phone',
        'position',
        'specialty_id',
    ];

    public function specialties()
	{
		return $this->BelongTo(Specialty::class);
	}

    public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}

    public function emergencies()
    {
        return $this->hasMany(Emergency::class);
    }
}
