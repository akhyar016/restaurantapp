<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
    public function order()
    {
    	return $this->belongsTo('App\Model\Orders');
    }
}
