<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', [PageController::class,'index']);


Route::get('/about', [PageController::class,'about']);

Route::get('/contact', [PageController::class,'contact']);

Route::get('/shop', [PageController::class,'shop']);


Route::get('/projects', [PageController::class,'projects']);


Route::get('/blog', [PageController::class,'blog']);


Route::get('/post', [PageController::class,'post']);

Route::get('/program-area', [PageController::class,'programArea']);

Route::get('/donation', [PageController::class,'donation']);

Route::get('/registration', [PageController::class,'registration']);

Route::get('/success', [PageController::class,'success']);

Route::post('/pay', [PaymentController::class, 'redirectToGateway']);

Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);

Route::post('/donate', [DonationController::class, 'store']);

Route::post('/register-member', [MembershipController::class, 'store']);


Route::get('/log-out', [PageController::class,'log_out']);






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/admin_dashboard.php';
