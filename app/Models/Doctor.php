<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
        'doctor_id',
        'name',
        'phone',
        'position',
        'specialty_id'
    ];
}
