<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personnelController;
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
//     return view('welcome');
// });

// Route::get('/create', function () {
//     return view('personnel.create');
// });
// Route::get('/table', function () {
//     return view('personnel.table');
// });

// Route::get('/', 'personnelController@index');
// Route::get('/admin-create', 'personnelController@create');
// Route::resource('/admin', 'App\Http\Controllers\personnelController');
// Route::post('storeData', 'personnelController@store');

Route::get('/', [personnelController::class, 'index']);
Route::resource('personnel', personnelController::class);
Route::get('/search', [personnelController::class, 'search']);
Route::get('/login', [personnelController::class, 'login']);