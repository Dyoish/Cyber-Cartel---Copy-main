<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoughtProducts extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'price',
        'details',
        'quantity',
        'category',
        'user_id',
    ];

    //RELATION TO USERS
    public function users(){
        return $this->belongsTo(User::class);
    }

    //RELATION TO CART
    public function carts(){
        return $this->belongsTo(Cart::class);
    }

    //RELATION TO CANCELLED PRODUCTS
    public function cancelled_products(){
        return $this->hasMany(CancelledProducts::class);
    }

    //RELATION TO REFUNDED PRODUCTS
    public function refunded_products(){
        return $this->hasMany(RefundedProducts::class);
    }
}
