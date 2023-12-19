<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactQuery extends Model
{
    // protected $guarded =[];
    protected $fillable = ['name', 'email', 'subject', 'message'];
}
