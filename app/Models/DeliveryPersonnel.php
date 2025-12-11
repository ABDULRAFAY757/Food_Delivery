<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryPersonnel extends Model
{
    protected $primaryKey = 'personnel_id';

	/**
	 * @return mixed
	 */
	public function getPrimaryKey() {
		return $this->primaryKey;
	}
	
	/**
	 * @param mixed $primaryKey 
	 * @return self
	 */
	public function setPrimaryKey($primaryKey): self {
		$this->primaryKey = $primaryKey;
		return $this;
	}

	public function city()
    {
       return $this->belongsTo(city::class);
    }

}
