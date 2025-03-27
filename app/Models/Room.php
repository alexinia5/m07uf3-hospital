<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable=[
        'availability',
        'date_admission',
        'floor_num',
        'patient_id',
    ];

    public function patient()
	{
		return $this->hasOne(Patient::class);
	}
}
