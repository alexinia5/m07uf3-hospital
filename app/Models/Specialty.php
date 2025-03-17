<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public $timestamps = false;

    protected $fillable=[
        'specialty_id',
        'name',
        'location_departament',
    ];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function doctorBoss()
    {
        return $this->belongsTo(Doctor::class);
    }
}
