<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded =[];
    public function sub_category(){
        return $this->hasMany(SubCategory::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
