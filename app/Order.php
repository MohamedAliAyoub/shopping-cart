<?php

namespace App;
use App\USer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'cart'
    ];


    public function user(){

        return $this->belongsTo('App\USer');
    }
}