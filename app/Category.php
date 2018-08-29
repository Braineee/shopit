<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //fillables
    protected $fillable = [
        'sku',
        'name'
    ];

    public function Product(){
        return $this->hasMany('App\Product');
    }
}
