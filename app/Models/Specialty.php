<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable=[
        'specialty_id',
        'name',
        'location_departament',
    ];

    public function doctors()
	{
		return $this->belongsTo(Doctor::class);
	}

}
