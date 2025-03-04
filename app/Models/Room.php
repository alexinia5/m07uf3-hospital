<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=[
        'room_id',
        'availability',
        'date_admission',
        'floor_number',
    ];

    public function patient()
	{
		return $this->hasOne(Patient::class);
	}
}
