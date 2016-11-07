<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['make', 'model', 'year', 'color', 'transmission', 'office_id'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'car_rentals');
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
