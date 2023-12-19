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

Route::name('front.')->group(function () {
    Route::get('/', 'Front\HomeController@index')->name('home');
    Route::get('/about', 'Front\AboutController@index')->name('about');
    Route::post('/contact', 'Front\ContactController@store')->name('contact');
    Route::get('/contact', 'Front\ContactController@index')->name('contact');
    Route::get('/newsletter', 'Front\NewsletterController@index')->name('newsletter');
    Route::post('/newsletter', 'Front\NewsletterController@store')->name('newsletter');
    Route::get('/shop', 'Front\ShopController@index')->name('shop');

    Route::get('/cart', 'Front\CartController@index')->name('cart');
    Route::get('/product/{slug?}', 'Front\SingleProductController@index')->name('singleproduct');
    Route::get('/cart', 'Front\SingleProductController@cart')->name('cart');
    Route::post('/add_to_cart', 'Front\SingleProductController@addToCart')->name('add_to_cart');
    Route::get('/checkout', 'Front\CheckoutController@index')->name('checkout');
    Route::post('/checkout', 'Front\CheckoutController@create')->name('checkout');
    Route::get('/category', 'Front\CategoryController@index')->name('category');
    Route::get('/blog', 'Front\BlogController@index')->name('blog');
    Route::get('/single', 'Front\SingleController@index')->name('single');
    Route::get('/categorylist', 'Front\CategorylistController@index')->name('categorylist');

    // auth routes
    Route::get('/login', 'Front\Auth\LoginController@showLoginForm')->name('login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/login', 'Front\Auth\LoginController@login');
    Route::get('/register', 'Front\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Front\Auth\RegisterController@register');
    Route::get('/forgotpassword', 'Front\Auth\ForgotPasswordController@showLinkRequestForm')->name('forgotpassword');
    Route::post('/forgotpassword', 'Front\Auth\ForgotPasswordController@sendOtpEmail')->name('forgotpassword');
    Route::get('/otp_verification/{email}', 'Front\Auth\OtpVerificationController@showOtpForm')->name('otp_verification');
    Route::post('/otp_verification', 'Front\Auth\OtpVerificationController@verify')->name('otp_verification_post');
    Route::get('/change_password', 'Front\Auth\ChangePasswordController@index')->name('change_password');


    // user routes
    Route::prefix('user/')->middleware('auth')->group(function () {
        Route::get('dashboard', 'Front\DashboardController@index')->name('dashboard');
        Route::get('/wishlist', 'Front\WishlistController@index')->name('wishlist');

    });
});
Route::get('/hello', 'Front\Auth\ForgotPasswordController@hello')->name('password.reset');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
