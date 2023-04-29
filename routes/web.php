<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
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
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [LoginController::class, 'register']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// Route::view('/login', 'login');
// Route::view('/register', 'register');
// Route::view('/home', 'home');
// Route::view('/blog', 'blog');
// Route::view('/contact', 'contact');

// Route::get('/login', function () {
//     return "login page";
// });

// Route::get('/register', function () {
//     return "Register Page";
// });

// Route::get('/home', function (){
//     return "Home Page";
// });

// Route::get('/blog', function (){
//     return "Blog Page";
// });

// Route::get('/contact', function (){
//     return "Contact Page";
// });