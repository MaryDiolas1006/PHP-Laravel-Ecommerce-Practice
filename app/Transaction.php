<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function status()
    {
    	return $this->belongsTo('App\Status');

    }

    public function paymentMode()
    {
    	return $this->belongsTo('App\paymentMode');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function products()
    {
    	return $this->belongsToMany('App\Product')
    		->withPivot('subtotal', 'price', 'quantity')
    		->withTimestamps();
    }
}
