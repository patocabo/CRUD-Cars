<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/', function (){
    $cars = Car::orderBy('created_at','DESC')->paginate(15);
    return view ('cars.index',compact('cars'));

});

Route::resource('cars', CarController::class);
