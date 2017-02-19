<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','alias','intro','content','image','unit_prict','price','discount','sku','units_on_order ','meta_keyword ','meta_description  ','tags','viewed','actived','user_id','category_id ','created_at ','updated_at '];

    public function category(){
    	return $this->belongTo('Category');
    }
   
    public function user(){
    	return $this->belongTo('User');
    }
    
}
