<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainViewController;

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

Route::get('/chat',function() {
    return view('chat');
});

// Route::get('/home',function() {
//     return view('home');
// });

Route::get('/', [ MainViewController::class,'home' ]);

