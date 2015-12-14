<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Order extends \Eloquent
{

    protected $with = [
        'customer',
    ];
    
    public $timestamps = false;
    
    protected $fillable = [
        'customer_id',
        'receipt_no',
        'price',
        'weight',
        'type',
        'status',
        'start_date',
        'delivery_date',
        'with_press',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id');
    }
}
