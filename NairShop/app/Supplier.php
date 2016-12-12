<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['company_name ','contact_name ','phone','email ','company_website ','logo','country','actived','created_at','updated_at'];

    public function product(){
    	return $this->hasMany('App\Product');
    }
}
