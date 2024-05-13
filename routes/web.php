<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    $title = 'Dashboard';
    return view('pages.DashboardUser', compact('title'));
});

Route::get('/register', function (){
    $title = 'Register User';
    return view('pages.RegisterUser', compact('title'));
});
Route::get('/login', function (){
    $title = 'Login User';
    return view('pages.LoginUser', compact('title'));
});
