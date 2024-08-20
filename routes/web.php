<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewException;
use App\Http\Controllers\RestaurantController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('restaurants')->group(function () {
    
    Route::get('/',[RestaurantController::class,'index']);

    Route::get('/all',[RestaurantController::class,'index']);

    Route::get('show/{id}',[RestaurantController::class,'show']);

    //to create a new restaurant

    Route::get('create',[RestaurantController::class,'create']);

    Route::post('create',[RestaurantController::class,'store']);

    //to update a already existant restaurant

    Route::get('create/{id}',[RestaurantController::class,'edit']);

    Route::put('create/',[RestaurantController::class,'update']);

});



