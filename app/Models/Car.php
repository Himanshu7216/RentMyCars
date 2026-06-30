<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'slug',
        'model_year',
        'transmission',
        'fuel_type',
        'seats',
        'luggage_capacity',
        'color',
        'registration_number',
        'hourly_price',
        'daily_price',
        'weekly_price',
        'security_deposit',
        'description',
        'status',
    ];
    public function Brands(){
        return $this->belongsTo(Brand::class);
    }
}
