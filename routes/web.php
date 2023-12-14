<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CustomerController;
use App\http\Controllers\checkController;
use App\http\Controllers\feach;

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
    return view('index');
});

Route:: view('add','AddCostumer');
Route::POST('add',[CustomerController::class,'AddCustomer']);
Route:: view('success','success');


Route::get('data',[feach::class,'index']);
Route::get('edit/{id}', [feach::class,'edit']);
Route::put('update/{id}',[feach::class,'update']);
Route::delete('delete/{id}',[feach::class,'delete']);
Route:: get('auth',[checkController::class,'yourControllerMethod']);
