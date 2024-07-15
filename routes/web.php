<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController; 

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

//一覧
Route::get('/', [CustomerController::class, 'index']);
//検索
Route::get('/customers/search', [CustomerController::class, 'search']);
//追加
Route::get('/customers/add', [CustomerController::class, 'add']);
Route::post('/customers', [CustomerController::class, 'store']);
//詳細
Route::get('/customers/{customer}', [CustomerController::class ,'show']);
//編集
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{customer}', [CustomerController::class, 'update']);
//削除
Route::delete('/customers/{customer}', [CustomerController::class,'delete']);


