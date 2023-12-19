<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SiteSetting;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_settings = SiteSetting::latest()->paginate(15);
        return view('admin.site_settings.create',compact('site_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $site_settings = SiteSetting::first();
        return view('admin.site_settings.create', compact('site_settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->get(''));
        SiteSetting::create([
            'email' => request()->get('email'),
            'working_hours' => request()->get('working_hours'),
            'contact_info_text' => request()->get('contact_info_text'),
            'address' => request()->get('address'),
            'phone_number' => request()->get('phone_number'),
            'facebook' => request()->get('facebook'),
            'twitter' => request()->get('twitter'),
            'instagram' => request()->get('instagram'),
            'contact_us_map' => request()->get('contact_us_map'),
        ]);

        return redirect()->route('admin.site_setting.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
