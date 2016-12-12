<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable = ['price','description','quantity ','order_id','product_id','created_at','updated_at'];

    public function order(){
    	return $this->hasMany('Order');
    }
     public function product(){
    	return $this->hasMany('Product');
    }
}
