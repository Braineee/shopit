<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{
    //
    protected $fillable = [
        'list_id',
        'order_id'
    ];
}


