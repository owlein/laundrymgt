<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
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
}
