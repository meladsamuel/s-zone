<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsToMany(VendingMachine::class);
    }
}
