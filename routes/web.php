<?php

use App\Http\Controllers\FutureRoomController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FutureRoomController::class, 'getHomepage']);
Route::get('/mainFeatures', [FutureRoomController::class, 'getMainFeatures']);
Route::get('/roomDesigns', [FutureRoomController::class, 'getIndex']);
Route::get('/roomCategories/{category_name}', [FutureRoomController::class, 'getRoomCategories']);
Route::view('/ourPartners', 'ourPartners');
Route::view('/aboutUs', 'aboutUs');
