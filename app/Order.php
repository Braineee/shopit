<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id',
        'list_id',
        'no_of_items',
        'total_price'
    ];


    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Order(){
        return $this->hasMany('App\List');
    }
}
