<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandImage extends Model
{
    protected $guarded =[];

    public function brand(){
        return $this->belongsto(Brand::class);
    }
}
