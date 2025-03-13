<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SizeController;
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

    Route::prefix('dashboard')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('listdashboard');

    });
    //Sản phẩm
    Route::prefix('product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('listproduct');
        Route::get('/create',[ProductController::class,'create'])->name('createproduct');
    });

    //thể loại
    Route::prefix('Category')->group(function(){
        Route::get('/',[CategoryController::class,'index'])->name('listcategory');
        Route::get('/create',[CategoryController::class,'create'])->name('createcategory');
        Route::post('/store',[CategoryController::class,'store'])->name('storecategory');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('editcategory');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('updatecategory');
        Route::delete('/delete/{id}',[CategoryController::class,'destroy'])->name('deletecategory');
    });

    //màu sắc
    Route::prefix('Color')->group(function(){
        Route::get('/',[ColorController::class,'index'])->name('listcolor');
        Route::get('/create',[ColorController::class,'create'])->name('createcolor');
        Route::post('/store',[ColorController::class,'store'])->name('storecolor');
        Route::get('/edit/{id}',[ColorController::class,'edit'])->name('editcolor');
        Route::put('/update/{id}',[ColorController::class,'update'])->name('updatecolor');
        Route::delete('/delete/{id}',[ColorController::class,'destroy'])->name('deletecolor');
    });

    //kích cỡ
    Route::prefix('Size')->group(function(){
        Route::get('/',[SizeController::class,'index'])->name('listsize');
        Route::get('/create',[SizeController::class,'create'])->name('createsize');
        Route::post('/store',[SizeController::class,'store'])->name('storesize');
        Route::get('/edit/{id}',[SizeController::class,'edit'])->name('editsize');
        Route::put('/update/{id}',[SizeController::class,'update'])->name('updatesize');
        Route::delete('/delete/{id}',[SizeController::class,'destroy'])->name('deletesize');
    });


});
