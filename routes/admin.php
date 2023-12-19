<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');


    // Route::resource('/', 'Admin\HomeController');
    Route::resource('/about_us', 'Admin\AboutUsController');
    Route::resource('/site_setting', 'Admin\SiteSettingController');
    Route::resource('/category', 'Admin\CategoryController');
    Route::resource('/sub_category', 'Admin\SubCategoryController');
    Route::resource('/product', 'Admin\ProductController');
    Route::resource('/banner', 'Admin\BannerController');
    Route::resource('/brand', 'Admin\BrandController');
    Route::resource('/brand_image', 'Admin\BrandImageController');
    Route::resource('/comment', 'Admin\CommentController');
    Route::resource('/faq', 'Admin\FaqController');
    Route::resource('/news', 'Admin\NewsController');
    // Route::resource('/review', 'Admin\ReviewController');
    Route::resource('/page', 'Admin\PageController');
    Route::get('/contact', 'Admin\ContactQueryController@index')->name('contact');
    Route::get('/newsletter', 'Admin\NewsletterController@index')->name('newsletter');
    // Route::resource('/shop', 'Admin\ShopController');
    // Route::resource('/login', 'Admin\LoginController');
    // Route::get('/login', 'Admin\LoginController@store')->name('login');
    // Route::resource('/wishlist', 'Admin\WishlistController');
    // Route::resource('/dashboard', 'Admin\DashboardController');
    // // Route::get('/cart', 'Admin\CartController')->name('cart');
    // Route::resource('/singleproduct', 'Admin\SingleProductController');
    // Route::resource('/forgotpassword', 'Admin\ForgotPasswordController');
    // Route::resource('/checkout', 'Admin\CheckoutController');
    Route::resource('/blog', 'Admin\BlogController');
    // Route::resource('/single', 'Admin\SingleController');
    // Route::resource('/categorylist', 'Admin\CategorylistController');
});
