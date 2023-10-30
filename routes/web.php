<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ecommercecontroller;
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
//     return view('login');
// });
// Route::get('/sam', function () {
//     return view('registation');
// });
// Route::get('/sam1', function () {
//     return view('recoveryps');
// });

Route::get('/', [ecommerceController::class, 'loginpage']);
Route::post('/', [ecommerceController::class, 'loginpage1']);

Route::get('/reg', [ecommerceController::class, 'regpage']);
Route::post('/reg', [ecommerceController::class, 'regpage1']);

Route::get('/rec', [ecommerceController::class, 'recpage']);
Route::post('/rec', [ecommerceController::class, 'recpage1']);

Route::get('/das', [ecommerceController::class, 'daspage']);
Route::post('/das', [ecommerceController::class, 'daspage1']);

Route::get('/table', [ecommerceController::class, 'tablepage']);
Route::post('/table', [ecommerceController::class, 'tablepage1']);