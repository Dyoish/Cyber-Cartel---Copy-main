<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'price',
        'details',
        'category',
        'quantity',
        'user_id',
    ];

    //RELATION TO PRODUCTS
    public function products(){
        return $this->hasMany(Products::class);
    }

    //RELATION TO USERS
    public function users(){
        return $this->belongsTo(User::class);
    }

    //RELATION TO BOUGHT PRODUCTS
    public function bought_products(){
        return$this->belongsTo(BoughtProducts::class);
    }

}
