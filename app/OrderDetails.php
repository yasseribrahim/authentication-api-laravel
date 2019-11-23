<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $fillable = [
        'order_id', 'item_id', 'price', 'price_sale'
    ];
    
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
