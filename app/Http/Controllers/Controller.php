<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage($image, $folder = null)
    {
        $file = $image;
        $fileName = $this->saveFile($file, $folder);
        // $file = $image;
        // $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
        // $file->move('./uploads/' . $folder, $fileName);
        return $fileName;
    }

    public function saveFile($file, $folder)
    {
        $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
        $file->move('./uploads/' . $folder, $fileName);
        return $fileName;
    }

    public function getCartSubTotal()
    {
        $subtotal = 0;
        $cart = session('cart');
        foreach($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        return $subtotal;
    }

    public function getCartTotal()
    {
        $total = 0;
        // shipping chargets (if me)
        // $total += $shipping->charges;
        // $total += $coupon;
        $total += $this->getCartSubTotal();
        return $total;
    }
}
