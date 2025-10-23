<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


// <------------------ Welcome Page Route ------------------>

Route::get('/', fn() => view('welcome'))->name('page.welcome');

// <------------------ Landing Page Route ------------------>

Route::middleware(['verified','auth'])->group(function() {
   
    Route::get('/home',fn() => view('landing'))
                      ->name('page.landing');

    Route::get('/cart',fn() => view('cart'))
                      ->name('page.cart');

    Route::get('/checkout',fn() => view('checkout'))
                      ->name('page.checkout');
            
    Route::get('/contact',fn() => view('contact'))
                      ->name('page.contact');

    Route::get('/shop',fn() => view('shop'))
                      ->name('page.shop');

    Route::get('/shopDetail',fn() => view('shopDetail'))
                      ->name('page.shopDetail');

    Route::get('/testimonial',fn() => view('testimonial'))
                      ->name('page.testimonial');

    Route::get('/splash-login',fn() => view('splash'))
                      ->name('splash');
});

// <------------------ Profile Page Route ------------------>

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
                        ->name('profile.edit');
   
    Route::patch('/profile', [ProfileController::class, 'update'])
                       ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
                       ->name('profile.destroy');
});

Route::get('/email/verify', fn() => view('auth.verify-email'))
      ->middleware('auth')
      ->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
      
      $request->fulfill();
      
      return redirect(route('page.landing'));

})->middleware(['auth', 'signed'])->name('verification.verify');
 
Route::post('/email/verification-notification', function (Request $request) {
    
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');

})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/splash-logout',fn() => view('logoutSplash'))
                      ->name('splash.logout');

Route::fallback(function () {
    return response()->view('errors.notFound',[],404);
});


require __DIR__.'/auth.php';
