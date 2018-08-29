<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_ extends Model
{
    //
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];

    public function Order(){
        return $this->BelongsTo('App\Order');
    }

    public function Product(){
        return $this->hasMany('App\Product');
    }
}
