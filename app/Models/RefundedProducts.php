<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefundedProducts extends Model
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

    //RELATION TO BOUGHT PRODUCTS
    public function bought_products(){
        return $this->belongsTo(BoughtProducts::class);
    }
}
