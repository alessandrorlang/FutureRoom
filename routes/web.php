<?php

use App\Http\Controllers\FutureRoomController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FutureRoomController::class, 'getHomepage']);
Route::get('/mainFeatures', [FutureRoomController::class, 'getMainFeatures']);
Route::get('/roomDesigns', [FutureRoomController::class, 'getIndex']);
Route::view('/ourPartners', 'ourPartners');
Route::view('/aboutUs', 'aboutUs');



Route::get('/categories/bedroom', [FutureRoomController::class, 'getBedroom']);
Route::get('/categories/bathroom', [FutureRoomController::class, 'getBathroom']);
Route::get('/categories/kitchen', [FutureRoomController::class, 'getKitchen']);
Route::get('/categories/livingroom', [FutureRoomController::class, 'getLivingRoom']);
