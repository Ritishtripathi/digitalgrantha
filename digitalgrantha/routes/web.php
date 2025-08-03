<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/services', [WebsiteController::class, 'service'])->name('service');
Route::get('/pricing', [WebsiteController::class, 'pricing'])->name('pricing');
//services path
Route::get('/seo', [WebsiteController::class, 'seo'])->name('seo');
Route::get('/app-developement', [WebsiteController::class, 'appdevelopement'])->name('appdevelopement');
Route::get('/web-developement', [WebsiteController::class, 'webdevelopement'])->name('webdevelopement');
Route::get('/google-my-business', [WebsiteController::class, 'googlebusiness'])->name('googlebusiness');
Route::get('/social-media', [WebsiteController::class, 'socialmedia'])->name('socialmedia');
