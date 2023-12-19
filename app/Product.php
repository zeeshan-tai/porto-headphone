<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsto(Category::class);
    }

    public function brand(){
        return $this->belongsto(Brand::class);
    }

    public function images(){
        return $this->hasmany(ProductImage::class);
    }
}
