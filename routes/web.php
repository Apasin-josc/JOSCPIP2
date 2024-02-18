<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'showWelcomePage'])->name('welcome');
Route::get('products/{title}-{id}', [App\Http\Controllers\ProductController::class, 'showProduct'])->name('products.show');
Route::get('categories/{title}-{id}/products', [App\Http\Controllers\CategoryProductController::class, 'showProducts'])->name('categories.products.show');

Auth::routes([
    'register' => false,
    'reset'=> false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
