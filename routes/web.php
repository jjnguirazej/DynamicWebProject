<?php

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

//category controller
Route::get('/category/all', [\App\Http\Controllers\CategoryController::class,'index'])->name('all.category');
Route::post('/category/add', [\App\Http\Controllers\CategoryController::class,'store'])->name('store.category');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   $users = \App\Models\User::all();
    return view('dashboard',compact( 'users'));
})->name('dashboard');
