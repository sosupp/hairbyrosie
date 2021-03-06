<?php

use App\Http\Controllers\Admin\AuthController;
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

Route::get('/', function () {
    return view('index');
});


// Shop
Route::controller();

 // Subscribers
 Route::resource('/subscriber', 'PublicSubscriberController')->names([
    'create' => 'public.subscriber.create',
    'store' => 'public.subscriber.store',
    'destroy' => 'public.subscriber.destroy',
]);


// Gallery
Route::resource('/gallery', 'PublicGalleryController')->names([
    'index' => 'frontend.gallery.index',
]);

// Booking
Route::resource('/appointment', 'PublicAppointmentController')->names([
    'index' => 'frontend.booking.index',
    'create' => 'frontend.booking.create',
]);


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';

