<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(15);
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $fileName1 = null;
        if (request()->hasFile('thumbnail_image'))
        {
            $file = request()->file('thumbnail_image');
            $fileName1 = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName1);
        }

        $fileName = null;
        if (request()->hasFile('cover_image'))
        {
            $file = request()->file('cover_image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        Blog::create([
            'title' => request()->get('title'),
            'slug' => $slug,
            'thumbnail_image' => $fileName1,
            'cover_image' => $fileName,
            'short_description' => request()->get('short_description'),
            'description' => request()->get('description'),
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->to('admin')->with($notification);
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
        $blogs = blog::find($id);
        return view('admin.blogs.edit',compact('blogs'));
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
        $blogs = Blog::find($id);
        $fileName1 = null;
        if (request()->hasFile('thumbnail_image'))
        {
            $file = request()->file('thumbnail_image');
            $fileName1 = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName1);
        }
        $blogs = Blog::find($id);
        $fileName = null;
        if (request()->hasFile('cover_image'))
        {
            $file = request()->file('cover_image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        $blogs->update([
            'title' => request()->get('title'),
            'slug' => $slug,
            'thumbnail_image' => $fileName1,
            'cover_image' => $fileName,
            'short_description' => request()->get('short_description'),
            'description' => request()->get('description'),
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->to('admin')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::find($id);
        $blogs->delete();
        return redirect()->to('admin/blog');
    }
}
