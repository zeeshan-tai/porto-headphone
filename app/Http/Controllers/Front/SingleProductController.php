<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        // dd($slug);

        $products = Product::where('slug', $slug)->first();
        return view('front.product-detail', compact('products'));
    }

    public function cart(Request $request)
    {
        $cart = $request->session()->get('cart', collect([]));
        // dd($cart);
        return view('front.cart');
    }

    public function addToCart(Request $request)
    {
        // $request->session()->forget('cart');
        // dd($request->all());
        // $cart =session()->get('cart');

        // if(!$cart){
        //     $cart = [
        //         $product->id=>[
        //             'name' => $product->name,
        //             'quantity' => 1,
        //             'price' => $product->price,
        //             'image' => $product->image,

        //         ]
        //     ];
        //     session()->put('cart', $cart);
        //     return redirect()->route('front.cart')->with('Success', "Added to Cart");

        // }

        // if(isset($cart[$product->id])){
        //     $cart[$product->id]['quantity']++;
        //     session()->put('cart', $cart);
        //     return redirect()->route('front.cart')->with('Success', "Added to Cart");
        // }

        // $cart[$product->id] =[
        //     'name' => $product->name,
        //     'quantity' => 1,
        //     'price' => $product->price,
        //     'image' => $product->image,
        // ];
        // dd($product);

        // session()->put('cart', $cart);
        // return redirect()->route('front.cart')->with('Success', "Added to Cart");

        // us product ko db me se lao jisko user add to cart kar rha hy
        $product = Product::findOrFail($request->product_id);
        $data = [
            'quantity' => $request['quantity'],
            'slug' => $product->slug,
            '' => '',
            '' => ''
        ];
        $data['quantity'] = $request['quantity'];
        $data['slug'] = $product->slug;
        $data['title'] = $product->title;
        $data['price'] = $product->price;
        $data['image'] = $product->thumbnail;
        $data['product_id'] = $product->id;
                    // $data['discount'] = 0;
        // yahan pr check kar rhy hen k agr already cart ka session hy to wo lekr ao warna new session bnado cart ka
        if ($request->session()->has('cart')) {
                        $cart = $request->session()->get('cart', collect([]));
                    } else {
                        $cart = collect([]);
                    }
        // yahan pr shipping wagera extra cheezen jitni bh hoti hen unko put me dal sakty hen agr extra nh hen to srf cart me push karna hoga
        // $ship = ShippingMethod::first();
        //             $shipping_charges = 0;
        //             $shipping_method_id = 0;
        //             if ($ship != '') {
        //                 $shipping_charges = $ship->cost;
        //                 $shipping_method_id = $ship->id;
        //             }
        //             $cart->put('shipping_charges', $shipping_charges);
        //             $cart->put('shipping_method_id', $shipping_method_id);
                    // Push the new cart item into the cart collection
                    $cart->push($data);


                    // Update the cart data in the session
                    $request->session()->put('cart', $cart);

        // ye check karny k lye hy k cart me kia kia mojood hy or yehi hm cart k page pr show karwany k lye bh use kar sakty hen
            return redirect()->route('front.cart');
        // dd($cart);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
