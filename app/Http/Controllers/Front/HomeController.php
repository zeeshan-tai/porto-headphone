<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\News;
use App\Banner;
use App\Brand;
use App\Review;
use App\Category;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::get();
        $reviews = Review::get();
        $categories = Category::get();
        $banners = Banner::get();
        $brands = Brand::get();
        $products = Product::get();
        return view('front.index',compact('products', 'banners', 'news', 'brands', 'reviews', 'categories'));
    }

}

