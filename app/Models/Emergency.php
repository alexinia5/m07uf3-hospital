<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable=[
        'emergency_id',
        'date',
        'level',
        'diagnosis',
        'floor_num',
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function nurses()
    {
        return $this->belongsToMany(Nurse::class);
    }

    public function pacients()
	{
		return $this->hasMany(Pacient::class);
	}
}
