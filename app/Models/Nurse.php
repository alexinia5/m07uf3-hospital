<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $fillable=[
        'nurse_id',
        'dni',
        'gender',
        'name',
        'phone',
    ];

    public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}

    public function emergencies()
    {
        return $this->belongsToMany(Emergency::class);
    }
}
