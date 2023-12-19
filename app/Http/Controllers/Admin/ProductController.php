<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        $brands = Brand::get();
        $products = Product::latest()->paginate(15);
        return view('admin.products.index',compact('products', 'categories', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('admin.products.create',compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fileName = null;
        if (request()->hasFile('thumbnail'))
        {
            $file = request()->file('thumbnail');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug = Str::slug($request->title, '-');
        $product = Product::create([
            'title' => request()->get('title'),
            'slug' => $slug,
            'short_description' => request()->get('short_description'),
            'description' => request()->get('description'),
            'price' => request()->get('price'),
            'category_id' => request()->get('category_id'),
            'brand_id' => request()->get('brand_id'),
            'thumbnail' => $fileName,
            'status' => request()->get('status'),
        ]);

        if (request()->hasfile('images')) {
            foreach ($request->images as $image)
            {
                ProductImage::create([
                    'product_image' => $this->uploadImage($image, 'product_images'),
                    'product_id' => $product->id
                ]);
            }
        }

        return redirect()->route('admin.product.index');

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
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
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
        $this->validate(request(),[
            'title' => 'required',
            // 'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required',
            // 'category_id' => 'required',
            // 'brand_id' => 'required',
            'thumbnail' => 'required||mimes:png,jpg,jpeg,gif|max:2048',
            'status' => 'required',
        ]);
        $products = Product::find($id);
        $fileName = null;
        if (request()->hasFile('thumbnail'))
        {
            $file = request()->file('thumbnail');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $slug =Str::slug($request->title, '-');
        $products->update([
            'title' => request()->get('title'),
            'slug' => $slug,
            'short_description' => request()->get('short_description'),
            'description' => request()->get('description'),
            'price' => request()->get('price'),
            // 'category_id' => request()->get('category_id'),
            // 'brand_id' => request()->get('brand_id'),
            'thumbnail' => $fileName,
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
        $products = Product::find($id);

        $products->delete();
        return redirect()->to('admin/product');
    }
}
