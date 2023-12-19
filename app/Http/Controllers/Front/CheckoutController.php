<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\ShippingAddress;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            $data = [
               'sub_total' => $this->getCartSubTotal(),
               'total' => $this->getCartTotal(),
                'user_id' => auth()->id(),
            ];


        // create the shipping address

        $shipping_address = ShippingAddress::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'country' => $request->country,
            'street_address' => $request->street_address,
            'town' => $request->town,
            'state' => $request->state,
            'postcode' => $request->postcode,
            'phone' => $request->phone,
            'email_address' => $request->email_address,
            'order_note' => $request->order_note

        ]);
        $data['address_id'] = $shipping_address->id;

        // create order
             $order = Order::create($data);

        // create order detail
        foreach($request->session()->get('cart', collect([])) as $cart)
        {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'total_price' => $cart->price,
            ]);
        }

        return redirect()->route('/');

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
