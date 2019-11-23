<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'customer_id', 'discount',
    ];
    
    public function order_details()
    {
        return $this->hasMany('App\OrderDetails');
    }
}
