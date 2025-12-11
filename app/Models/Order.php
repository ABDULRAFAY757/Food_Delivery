<?php

namespace App\Models;

use App\Models\FOOD;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        // return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
        return $this->belongsTo(Customer::class, 'customer_id');
    }
                                                                                                                                    
    public function food()
    {

        return $this->belongsTo(Food::class);
    }


}