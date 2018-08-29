<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListOrder extends Model
{
    protected $table = 'list_order';

    protected $fillable = [
        'list_id',
        'order_id'
    ];
}
