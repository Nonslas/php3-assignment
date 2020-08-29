<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name', 'price', 'star', 'image', 'category_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

}
