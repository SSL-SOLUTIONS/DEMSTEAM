<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'Index'])->name('index');
Route::get('/ppc-management-services/', [HomeController::class, 'PPC'])->name('ppc');
Route::get('/reputation-management-services/', [HomeController::class, 'Reputation'])->name('Reputation');
Route::get('/web-development-company/', [HomeController::class, 'web_dev'])->name('web-dev');
Route::get('/social-media-marketing-services/', [HomeController::class, 'social'])->name('social');
Route::get('/marketing-automation-services/', [HomeController::class, 'marketing'])->name('marketing');
Route::get('/contact-us/', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/industries/luxury-communities/seo-services/', [HomeController::class, 'industries'])->name('industries');
Route::get('/industries/franchise/seo-services/', [HomeController::class, 'franchise'])->name('franchise');
Route::get('/industries/ecommerce/seo-services/', [HomeController::class, 'ecommerce'])->name('ecommerce');
Route::get('/industries/crypto/seo-services/', [HomeController::class, 'crypto'])->name('crypto');
Route::get('/industries/assisted-living/seo-services/', [HomeController::class, 'assisted_living'])->name('assisted-living');
Route::get('/about-us/', [HomeController::class, 'about'])->name('about');
Route::get('/awards/', [HomeController::class, 'awards'])->name('awards');
Route::get('/events/', [HomeController::class, 'events'])->name('events');
Route::get('/other/', [HomeController::class, 'other'])->name('other');
