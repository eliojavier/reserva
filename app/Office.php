<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['name', 'city_id'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function city()
    {
        return $this->belongsTo(Country::class);
    }
}
