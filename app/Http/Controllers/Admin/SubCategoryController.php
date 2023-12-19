<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubCategory;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = SubCategory::latest()->paginate(15);
        return view('admin.sub_categories.index',compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.sub_categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate(request(),[
        //     'title' => 'required',
        //     'slug' => 'required',
        //     'category_id' => 'required',
        //     'image' => 'required||mimes:png,jpg,jpeg,gif|max:2048',
        //     'status' => 'required',
        // ]);
            $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        $sub_category = SubCategory::create([
            'title' => request()->get('title'),
            'category_id' => request()->get('category_id'),
            'slug' => $slug,
            'image' => $fileName,
            // 'status' => 1,
            'status' => request()->get('status'),

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
        $sub_categories = SubCategory::find($id);
        return view('admin.sub_categories.edit',compact('sub_categories'));
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
        // $this->validate(request(),[
        //     'title' => 'required',
        //     'slug' => 'required',
        //     'category_id' => 'required',
        //     'image' => 'required||mimes:png,jpg,jpeg,gif|max:2048',
        //     'status' => 'required',
        // ]);
        $sub_categories = SubCategory::find($id);
            $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        $sub_categories->update([
            'title' => request()->get('title'),
            'category_id' => request()->get('category_id'),
            'slug' => $slug,
            'image' => $fileName,
            // 'status' => 1,
            'status' => request()->get('status'),

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
        $sub_categories = SubCategory::find($id);
        $sub_categories->delete();
        return redirect()->to('admin/sub_category');
    }
}
