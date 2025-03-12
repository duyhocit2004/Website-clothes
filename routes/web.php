<?php

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\admin\AuthController;
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

//Route::get('/', function () {
//    return 'hi';
//});

Route::get('login', [AuthController::class, 'Fromlogin'])->name('fromlogin');
Route::post('Postlogin', [AuthController::class, 'login'])->name('login');

Route::get('fromregister', [AuthController::class, 'fromregister'])->name('fromregister');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('logout', [AuthController::class, 'logout']);


Route::prefix('admin')->middleware('auth.admin')->group(function(){
    Route::get('/',[homeController::class,'index']);
    Route::prefix('product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('listproduct');
        Route::get('/create',[ProductController::class,'create'])->name('createproduct');
    });


});
