<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function Car(){
        return $this->belongsTo(Car::class);
    }
}
