<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Shipper extends Model
{
    protected $table = 'shippers';
    protected $fillable = ['company_name ','phone','email ','status','created_at','updated_at'];

    public function order(){
    	return $this->hasMany('Order');
    }
}
