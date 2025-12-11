<?php

namespace App\Models;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function customer()
    {
       return $this->hasMany(Customer::class);
    }
    public function city()
 {
    return $this->hasMany(City::class);
 }
}
