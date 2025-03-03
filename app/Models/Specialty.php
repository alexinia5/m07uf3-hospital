<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable=[
        'specialty_id',
        'name',
        'head_departament',
        'location_departament',
    ];
}
