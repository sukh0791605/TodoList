<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todo;
// use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });R
Route::get('/',[todo::class,'index']);
Route::post('/',[todo::class,'data']);

