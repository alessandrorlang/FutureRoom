<?php

use App\Http\Controllers\FutureRoomController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FutureRoomController::class, 'getHomepage']);
Route::get('/mainFeatures', [FutureRoomController::class, 'getMainFeatures']);
Route::get('/roomDesigns', [FutureRoomController::class, 'getIndex']);
Route::view('/ourPartners', 'ourPartners');
Route::view('/aboutUs', 'aboutUs');



Route::get('/bedroom', [FutureRoomController::class, 'getBedroom']);
Route::get('/bathroom', [FutureRoomController::class, 'getBathroom']);
Route::get('/kitchen', [FutureRoomController::class, 'getKitchen']);
Route::get('/livingroom', [FutureRoomController::class, 'getLivingRoom']);
