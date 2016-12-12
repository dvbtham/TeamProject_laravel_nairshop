<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['payment_type','actived'];

    public function order(){
    	return $this->hasMany('App\Order');
    }
}
