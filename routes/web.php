<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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
       //HomeContoller and it's pages
Route::get('/', [HomeController::class, 'home']);
Route::get('/massage-services', [HomeController::class, 'massage_services']);
Route::get('/body-services', [HomeController::class, 'body_services']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog-details', [HomeController::class, 'blog_details']);
Route::get('/product-details', [HomeController::class, 'product_details']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/specialists', [HomeController::class, 'specialists']);

            ////contact
Route::post('/contact', [ContactController::class, 'contact'])->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
