<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable=[
        'date',
        'diagnosis',
        'treatment',
    ];

    public function Pacient()
	{
		return $this->belongsTo(Patient::class);
	}
}
