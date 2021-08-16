<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
  public function machines(){
        return $this->belongsToMany(Product::class);
    }

    protected $fillable = [
        'id',
        'name',
        'img',
        'description',
        'price',
       // 'discount',
        'exp_date',
    ];
}
