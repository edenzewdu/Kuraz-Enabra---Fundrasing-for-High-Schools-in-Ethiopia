<?php

use App\Http\Controllers\Authmanager;
use App\Http\Controllers\homecontroller;
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
})->name('home');

Route::get('/login', [Authmanager::class, 'login']) -> name('login');
Route::post('/login', [Authmanager::class, 'loginPost']) -> name('login.post');
Route::get('/registration', [Authmanager::class, 'registration']) -> name('registration');
Route::post('/registration', [Authmanager::class, 'registrationPost']) -> name('registration.post');
Route::get('/logout', [Authmanager::class, 'logout']) -> name('logout');
Route::get('/home', [homecontroller::class, 'index'])-> name('home');

Route::group(['middleware'=>'auth'], function (){
    Route::get('/profile', function(){
        return "Hi";
    });
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/registration', function () {
//     return view('registration');
// });