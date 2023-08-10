<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Ticket;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LanguageController;
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

Route::middleware('isadmin')->resource('user',UserController::class);

Route::get('/indexticket',[TicketController::class,'index'])->name('index');
Route::get('/showticket/{id}',[TicketController::class,'show'])->name('show');
Route::get('/createticket',[TicketController::class,'create'])->name('create');
Route::post('/storeticket',[TicketController::class,'store'])->name('store');
Route::get('/edittikket/{id}',[TicketController::class,'edit'])->name('edit');
Route::put('/updatetikket/{id}',[TicketController::class,'update'])->name('update');
Route::delete('/deletetikket/{id}',[TicketController::class,'destroy'])->name('destroy');


Route::get('/language/{locale}',[LanguageController::class,'index'])->name('language');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

