<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculationController;  //kontrolerio aprasymas

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('lara', function () {
    return 'welcome';
});

Route::get('suma/{a}/{b}', [CalculationController::class, 'suma']);
   //kelias ir URL'as                             //kontrolerio metodo vardas                 

Route::get('daugyba/{a}/{b}', [CalculationController::class, 'daugyba']);

Route::get('dalyba/{a}/{b}', [CalculationController::class, 'dalyba']);

Route::get('atimtis/{a}/{b}', [CalculationController::class, 'atimtis']);