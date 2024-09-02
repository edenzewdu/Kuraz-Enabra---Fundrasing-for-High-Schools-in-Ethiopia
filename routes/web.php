<?php

use App\Http\Controllers\Authmanager;
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
    return view('welcome');
});

Route::get('/login', [Authmanager::class, 'login']) -> name('login');
Route::post('/login', [Authmanager::class, 'loginPost']) -> name('login.post');
Route::get('/registration', [Authmanager::class, 'registration']) -> name('registration');
Route::post('/registration', [Authmanager::class, 'registrationPost']) -> name('registration.post');

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/registration', function () {
//     return view('registration');
// });