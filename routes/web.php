<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
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

Route::get('/dbconn',function(){
    return view ('dbconn');
});

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);



Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/edit',[ProductController::class,'update'])->name('product.update');
Route::delete('/product/{product}/destroy',[ProductController::class,'destroy'])->name('product.destroy');

Route::get('/blog',[BlogController::class,'blogindex'])->name('blog.blogindex');
Route::get('/blog/create',[BlogController::class,'create'])->name('blog.blogcreate');
Route::post('/blog',[BlogController::class,'store'])->name('blog.store');
Route::get('/blog/edit',[BlogController::class,'edit'])->name('blog.blogedit');
Route::get('/blog/{blog}/edit',[BlogController::class,'edit'])->name('blog.blogedit');
Route::put('/blog/{blog}/edit',[BlogController::class,'update'])->name('blog.update');
Route::delete('/blog/{blog}/destroy',[BlogController::class,'destroy'])->name('blog.destroy');