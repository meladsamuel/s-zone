<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_vendingmachine extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'position',
        'number_of_product',
        'vending_machine_id',
        'product_id',
    ];

    // public function products(){
    //     return $this->belongsToMany(product_vendingmachine::class);
    // }

    // public function machines(){
    //     return $this->belongsToMany(product_vendingmachine::class);
    // }
}
