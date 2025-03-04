<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    protected $fillable=[
        'history_id',
        'date',
        'diagnosis',
        'treatment',
    ];

    public function Pacient()
	{
		return $this->belongsTo(Patient::class);
	}
}
