<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\Cruds;
use App\Http\Controllers\CrudsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::resource('/crud/posts', CrudController::class);
// Route::get('/crud/posts/id', [CrudController::class, 'id']);
// Route::resource('/crud/posts', CrudController::class);
// Route::get('/crud', function () {
//     return view('crud');
// });
