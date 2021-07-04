<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BookController;
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
Route::get('/',[BookController::class,'userindex'])->name("indexlist");

Route::prefix('admin')->middleware('checklogin:admin')->group(function() {


    Route::get('/',[AccountController::class,'view'])->name('display-user');
    Route::get('/create', [AccountController::class,'create'])->name('create');
    
    Route::post('/adduser', [AccountController::class,'createuser']);
    Route::get('/reset/{id}', [AccountController::class,'resetpass']);


    Route::get('/book',[BookController::class,'Viewbook'])->name('viewbook');
    Route::get('/book/delete/{id}',[BookController::class,'Delete']);
    Route::get('/book/create',[BookController::class,'create'])->name('createbook');
    Route::post('/book/createbook', [BookController::class,'createbook'])->name('createbook');
    Route::get('/book/update/{id}',[BookController::class,'updateview']);
    Route::post('/book/update', [BookController::class,'update'])->name('update');

});




Route::prefix('user')->middleware('checklogin:admin,user')->group(function() {

    Route::get('/{id}',[AccountController::class,'getbyid'])->name('user');
});







Route::get('/logout', [AccountController::class,'logout']);


Route::get('/login',function () {
    return view('admin.login',['mess'=>""]);
})->name('login');


Route::post('/checklogin', [AccountController::class,'checklogin']);
