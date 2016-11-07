<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function offices()
    {
        return $this->hasMany(Office::class);
    }
}
