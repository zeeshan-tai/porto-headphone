<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function store()
    {

       $newsletters = Newsletter::create([
        'email' => request()->get('email')
          ]);


        return back();
    }
}
