<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AboutUs;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us = Aboutus::latest()->paginate(15);
        return view('admin.about_us.create',compact('about_us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about_us = AboutUs::first();
        return view('admin.about_us.create', compact('about_us'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // $this->validate(request(), [
            //     'title' => 'required',
            //     'slug' => 'required',
            //     'content' => 'required',
            //     'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
            // ]);
        $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        AboutUs::create([
            'title' => request()->get('title'),
            'slug' => request()->get('slug'),
            'content' => request()->get('content'),
            'image' => $fileName,
        ]);

        return redirect()->route('admin.about_us.create');
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
        // $about_us = AboutUs::find($id);
        // return view('admin.about_us.edit',compact('about_us'));
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
        // $this->validate(request(), [
        //     'title' => 'required',
        //     'slug' => 'required',
        //     'content' => 'required',
        //     'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
        // ]);
        // $about_us = AboutUs :: find($id);
        // $fileName = null;
        // if (request()->hasFile('image'))
        // {
        //     $file = request()->file('image');
        //     $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
        //     $file->move('./uploads/', $fileName);
        // }

        // $about_us->update([
        // 'title' => request()->get('title'),
        // 'slug' => request()->get('slug'),
        // 'content' => request()->get('content'),
        // 'image' => $fileName,
        // ]);
        // $notification = [
        //     'message' => 'Record Inserted Successfully!',
        //     'alert-type' => 'success',
        // ];

        // return redirect()->to('admin')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $about_us = AboutUs::find($id);

        // $about_us->delete();
        // return redirect()->to('/admin/about_us');
    }
}
