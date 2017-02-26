<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Category extends Model
{
    protected $table = 'categories';
<<<<<<< HEAD
    protected $fillable = ['name','alias','parent_id','is_deleted','description','actived','created_at','updated_at'];
=======
    protected $fillable = ['name','alias','parent_id','description','actived','is_deleted','created_at','updated_at'];
>>>>>>> 23c87e880e2df90f5202a0b5cd4b5c2a428cee84

    public function product(){
    	return $this->hasMany('Product');
    }
}
