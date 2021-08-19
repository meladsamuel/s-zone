<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name',
        'img',
        'description',
        'price',
       // 'discount',
        'exp_date',
        'cat_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    
    public function machines(){
        return $this->belongsToMany(Product::class);
    }
}
