<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Brand extends Model
{
     protected $table = 'brands';
    protected $fillable = ['name','description','image','actived','created_at','updated_at'];

    public function product(){
    	return $this->hasMany('Brand');
    }
}
