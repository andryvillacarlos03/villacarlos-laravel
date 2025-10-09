<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome',[PageController::class,'welcomePage'])->name('page.welcome');
Route::get('/cart',[PageController::class,'cartPage'])->name('page.cart');
Route::get('/contact',[PageController::class,'contactPage'])->name('page.contact');
Route::get('/shop',[PageController::class,'shopPage'])->name('page.shop');
Route::get('/shopDetail',[PageController::class,'shopDetailPage'])->name('page.shopDetail');
Route::get('/testimonial',[PageController::class,'testimonialPage'])->name('page.testimonial');
Route::get('/checkout',[PageController::class,'checkoutPage'])->name('page.checkout');

Route::get('/home', function () {
    return view('landing');
})->middleware(['auth', 'verified'])->name('page.landing');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect(route('page.landing'));
})->middleware(['auth', 'signed'])->name('verification.verify');
 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__.'/auth.php';
