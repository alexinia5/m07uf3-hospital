<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    protected $fillable=[
        'pacient_id',
        'dni',
        'gender',
        'name',
        'phone',
        'address',
        'cd',
        'medical_history_id',
    ];
}