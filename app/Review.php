<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function product(){
        return $this->belongsto(Product::class);
    }
}
