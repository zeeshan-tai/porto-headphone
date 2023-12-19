<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleProduct extends Model
{
    protected $fillable = ['name', 'quantity', 'price', 'image'];

}
