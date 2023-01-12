<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;

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

Route::get('/places', [PlaceController::class, 'index']);
Route::get('/places/create', [PlaceController::class, 'createForm']);
Route::get('/places/show/{id}', [PlaceController::class, 'getPlaceById']);
Route::get('/places/edit/{id}', [PlaceController::class, 'editForm']);
Route::get('/places/all', [PlaceController::class, 'getAll']);

Route::post('/places/store', [PlaceController::class, 'storePlace']);
Route::post('/places/update/{id}', [PlaceController::class, 'updatePlace']);

Route::get('/places/delete/{id}', [PlaceController::class, 'deletePlace']);
