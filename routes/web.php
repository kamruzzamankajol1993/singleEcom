<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ZipcodeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckOutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BillingController;
use App\Http\Controllers\Admin\ChooseController;
use App\Http\Controllers\Admin\MainTitleController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SocialController;
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


Route::resource('social', SocialController::class);
Route::resource('contactUs', ContactController::class);
Route::resource('aboutUs', AboutUsController::class);
Route::resource('billing', BillingController::class);
Route::resource('choose', ChooseController::class);
Route::resource('mainTitle', MainTitleController::class);
Route::resource('policy', PolicyController::class);
Route::resource('product', ProductController::class);

Route::resource('seo', SeoController::class);
Route::resource('service', ServiceController::class);
Route::resource('shipping', ShippingController::class);
Route::resource('slider', SliderController::class);
Route::resource('testimonial', TestimonialController::class);



Route::controller(LoginController::class)->group(function () {


    Route::get('/admin/login', 'showLoginForm')->name('showLoginForm');



});

Route::controller(CheckOutController::class)->group(function () {


    Route::get('/checkOut', 'checkOut')->name('checkOut');
    Route::get('/checkZipCode', 'checkZipCode')->name('checkZipCode');
    Route::post('/finalSubmit', 'finalSubmit')->name('finalSubmit');
    Route::get('/successPage/{id}', 'successPage')->name('successPage');


});

Route::controller(CartController::class)->group(function () {


    Route::get('/addToCart/{id}', 'addToCart')->name('addToCart');
    Route::get('/updateCart', 'updateCart')->name('updateCart');


});

Route::controller(FrontController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/menuInformation', 'menuInformation')->name('menuInformation');
    Route::get('/orderList', 'orderList')->name('orderList');
    Route::get('/popularItem', 'popularItem')->name('popularItem');



});

Route::resource('category', CategoryController::class);
Route::resource('food', FoodController::class);
Route::resource('menu', MenuController::class);
Route::resource('order', OrderController::class);

Route::controller(OrderController::class)->group(function () {

    Route::get('/allOrder', 'allOrder')->name('allOrder');
    Route::get('/orderPrint/{id}', 'orderPrint')->name('orderPrint');
});


Route::resource('zipCode', ZipcodeController::class);



// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
