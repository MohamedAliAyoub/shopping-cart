<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


	protected $fillable = [
        'title' , 'price' , 'image' , 'brand_id' , 'category_id'
    ];   
}
