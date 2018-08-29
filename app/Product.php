<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //fillables
    protected $fillable = [
        'sku',
        'name',
        'description',
        'image_location',
        'category_id'
    ];

    public function Category(){
        return $this->belongsTo('App\Category');
    }

    public function List(){
        return $this->belongsToMany('App\List');
    }
}
