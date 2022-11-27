<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class,'display'])->name('dashboard')->middleware(['auth']);

Route::get('/login',[home::class,'login'])->name('login');

Route::post('/login',[UserController::class,'loginuser'])->name('loginuser');


Route::get('/register',[home::class,'register'])->name('register');

Route::post('/register',[UserController::class,'registeruser'])->name('registeruser');

Route::get('/logout',[UserController::class,'logout'])->name('logout');




Route::post('/add',[StudentController::class,'addstu'])->name('addstu');
Route::get('/add',[StudentController::class,'add'])->name('add')->middleware(['auth']);
Route::get('/edit',[StudentController::class,'editv'])->name('edit')->middleware(['auth']);

Route::get('edit/{id}',[Studentcontroller::class,'editstu']);
Route::post('/edit',[Studentcontroller::class,'update'])->name('update');

Route::get('delete/{id}',[Studentcontroller::class,'delete']);