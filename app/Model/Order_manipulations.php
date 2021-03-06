<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order_manipulations extends Model
{
    protected $table = "order_manipulations";
    public function order()
    {
    	return $this->belongsTo('App\Model\Orders');
    }

    public function item()
    {
        return $this->belongsTo('App\Model\Items');
    }
}
