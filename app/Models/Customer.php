<?php

namespace App\Models;
use App\Models\Resturant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
 
	public function resturant()
    {
        return $this->belongsTo(Resturant::class, 'resturant_id');
    }
	public function order(){
	return $this->belongsToMany(Food::class, 'orders');
	}
}
