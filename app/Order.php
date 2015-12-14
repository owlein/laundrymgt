<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Order extends \Eloquent
{

    protected $with = [
        'customer',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id');
    }
}
