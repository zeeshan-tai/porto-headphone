<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->paginate(15);
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
        //     'description' => 'required',
        //     'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
        // ]);
        $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        $news = News::create([
            'title' => request()->get('title'),
            'slug' => $slug,
            'description' => request()->get('description'),
            'image' => $fileName,
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
        $news = News::find($id);
        return view('admin.news.edit',compact('news'));
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
        //     // 'slug' => 'required',
        //     'description' => 'required',
        //     'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
        // ]);
        $news = News :: find($id);
        $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        $news->update([
        'title' => request()->get('title'),
        'slug' => $slug,
        'description' => request()->get('description'),
        'image' => $fileName,
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
        $news = News::find($id);

        $news->delete();
        return redirect()->to('/admin/news');
    }
}
