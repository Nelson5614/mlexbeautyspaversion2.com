<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AppointmentController;


       // pages routes
        Route::get('/', [HomeController::class, 'home']);
        Route::get('/portfolio', [HomeController::class, 'portfolio']);

        //Contat routes
        Route::get('/contact', [HomeController::class, 'contact']);
        Route::post('/contact', [ContactController::class, 'contact'])->name('contact');
        
        //Blog routes
        Route::get('/blog', [HomeController::class, 'blog']);
        Route::get('/blog-details', [HomeController::class, 'blog_details']);
        
        //Servives routes
        Route::get('/massage-services', [HomeController::class, 'massage_services']);
        Route::get('/body-services', [HomeController::class, 'body_services']);
        
        
        //Shop routes
        Route::get('/shop', [HomeController::class, 'shop']);
        Route::get('/shop/{product}', [HomeController::class, 'show'])->name('product_details');
        
        //About routes
        Route::get('/about', [HomeController::class, 'about']);
        Route::get('/specialists', [HomeController::class, 'specialists']);


        //cart routes
        Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
        Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
        
        Route::patch('/cart/{product}', [CartController::class, 'update'])->name('cart.update');
        Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.delete');


        //Coupon routes
        Route::post('coupons', [CouponsController::class, 'store'])->name('coupons.store');
        Route::delete('coupons', [CouponsController::class, 'destroy'])->name('coupons.destroy');

      

        //Appointments routes
        Route::get('/appointment', [HomeController::class, 'appointment']);
        Route::get('/my-appointments', [AppointmentController::class, 'myappointments']);
        Route::get('/cancel-appointment/{id}', [AppointmentController::class, 'cancel']);
        Route::post('/appointment', [AppointmentController::class, 'appointment'])->name('appointment');

        //Mailling routes
        Route::get('email', [EmailsController::class, 'email'])->name('emails.email');
        // Route::get('appointment-email', [EmailsController::class, 'appointment'])->name('emails.appointment');

        Route::get('appointment-email', function(){

            $appointment = App\Models\Appointment::find(1);
            return new App\Mail\AppointmentMail($appointment);
        });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');

    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
