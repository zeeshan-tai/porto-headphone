<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use Illuminate\Support\Str;
use App\BrandImage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(15);
        return view('admin.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        $brand = Brand::create([
            'name' => request()->get('name'),
            'slug' => $slug,
            'image' => $fileName,
            // 'status' => 1
            'status' => request()->get('status'),


        ]);
        if (request()->hasFile('images')){
            foreach ($request->images as $image)
            {
                BrandImage::create([
                    'brand_image' => $this->uploadImage($image, 'brand_images'),
                    'brand_id' => $brand->id
                ]); 
            }
        }


        return redirect()->route('admin.brand.index');
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
        $brand = Brand::find($id);
        return view('admin.Brands.edit',compact('brand'));
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

        $brands = Brand::find($id);
        $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        $brands->update([
            'name' => request()->get('name'),
            'slug' => $slug,
            'image' => $fileName,
            // 'status' => 1,
            'status' => request()->get('status'),

        ]);

        return redirect()->to('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::find($id);

        $brands->delete();
        return redirect()->to('admin/brand');
    }
}
