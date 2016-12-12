<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','alias','intro','content','image','unit_prict','price','discount','sku','units_on_order ','meta_keyword ','meta_description  ','tags','viewed','actived','user_id ','brand_id ','category_id ','supplier_id ','created_at ','updated_at '];

    public function category(){
    	return $this->belongTo('Category');
    }
    public function  brand(){
    	return $this->belongTo('Brand');
    }
    public function user(){
    	return $this->belongTo('User');
    }
    public function  supplier(){
    	return $this->belongTo('Supplier');
    }
    public function order_detail(){
    	return $this->belongTo('OrderDetail');
    }
}
