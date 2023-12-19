<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactQuery;
use App\Faq;
use App\SiteSetting;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::get();
        $site_settings = SiteSetting::first();
        return view('front.contact',compact('site_settings','faqs'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $contact_queries = ContactQuery::create([
            'name' => request()->get('name'),
            'email' => request()->get('email'),
            'subject' => request()->get('subject'),
            'message' => request()->get('message')
        ]);

        // ContactQuery::create($contact_query);
        return redirect()->back()->with('success', 'Message sent successfully!',compact('contact_queries'));
        // return back();
    }
}
