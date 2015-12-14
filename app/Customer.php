<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Customer extends \Eloquent
{
    //
    
    /**
     * Fillable fields
     * 
     * @var array
     */
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'address',
        'contact_no'
    ];
  

    public function customerOrders()
    {
        return $this->hasMany('Order');
    }
    
}
