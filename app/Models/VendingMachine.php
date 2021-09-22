<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class VendingMachine extends Model
{
    use HasFactory;

   protected $fillable = [
    'id',
    'name',
    'ip_address',
    'longitude',
    'latitude',
];
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('position');
    }
}
