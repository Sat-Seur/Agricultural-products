<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $slides = DB::table('slide')->get();//link from table slide
    $newss = DB::table('news')->get();
    
    return view('frontend.home', ['slides' => $slides, 'newss' => $newss]);
})->name('home');


//link from home to product list
Route::get('/products', function () {
    $products = DB::table('product')->get();
    return view('frontend.product',['products' => $products]);
})->name('products');

Route::get('/contactus', function () {
    return view('frontend.contactus');
})->name('contactus');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/viewDetail', function () {
    return view('frontend.viewDetail');
})->name('viewDetail');


Route::get('/news1', function () {
    return view('frontend.news1');
})->name('news1');




Route::get('/administrator', function () {
    return view('admin.blank');
});

Route::resource('admin/slide', 'App\Http\Controllers\SlideController');

Route::resource('admin/news', 'App\Http\Controllers\NewsController');

Route::resource('admin/product', 'App\Http\Controllers\ProductController');




