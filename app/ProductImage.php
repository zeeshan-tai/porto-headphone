<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $guarded =[];

    public function brand(){
        return $this->belongsto(Product::class);
    }
}
