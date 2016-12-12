<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['shipper_id ','payment_status ','user_id','payment_id','created_at','updated_at','actived'];

    public function shipper(){
    	return $this->belongTo('Shipper');
    }
     public function payment(){
    	return $this->belongTo('Payment');
    }
     public function user(){
    	return $this->belongTo('User');
    }
     public function order_detail(){
    	return $this->belongTo('OrderDetail');
    }
}
