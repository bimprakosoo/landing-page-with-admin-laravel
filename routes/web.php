<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingPageController;
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

//Route::get('/', function () {
//    return view('landing_page');
//});

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/admin', function () {
  return view('template/login');
});

Route::post('/login', [AuthController::class, 'store']);
Route::get('/logout', [AuthController::class, 'destroy']);

Route::group(['prefix' => 'dashboard'], function(){
  Route::get('/', [DashboardController::class, 'index']);
  Route::get('/delete/{id}', [DashboardController::class, 'delete']);
  Route::post('/insert', [DashboardController::class, 'upload']);
});

Route::group(['prefix' => 'team'], function(){
  Route::get('/', [TeamController::class, 'index']);
  Route::get('/delete/{id}', [TeamController::class, 'delete']);
  Route::post('/insert', [TeamController::class, 'insert']);
});

Route::group(['prefix' => 'about'], function(){
  Route::get('/', [AboutController::class, 'index']);
  Route::post('/insert', [AboutController::class, 'insert']);
});

Route::group(['prefix' => 'product'], function(){
  Route::get('/', [ProductController::class, 'index']);
  Route::get('/delete/{id}', [ProductController::class, 'delete']);
  Route::post('/insert', [ProductController::class, 'insert']);
});
