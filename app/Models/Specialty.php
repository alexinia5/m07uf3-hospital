<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable=[
        'specialty_id',
        'name',
        'location_departament',
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function doctorBoss()
    {
        return $this->belongsTo(Doctor::class);
    }
}
