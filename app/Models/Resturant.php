<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
     public function customer()
 {
    return $this->hasMany(Customer::class);
 }

}
