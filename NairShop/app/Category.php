<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name','alias','parent_id','description','actived','is_deleted','created_at','updated_at'];

    public function product(){
    	return $this->hasMany('Product');
    }
}
