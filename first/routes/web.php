<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController as C;
use App\Http\Controllers\FirstController;

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

Route::get('/labas', fn() => '<h1 style="color:crimson;">LABAS</h1>');


Route::prefix('labas')->group(function () {

    Route::get('/briedi', [FirstController::class, 'hello'])->name('briedis');
    Route::get('/vovere', [FirstController::class, 'helloV']);
    Route::get('/{animal}', [FirstController::class, 'helloAnimal']);
    Route::get('/{animal}/{color}/color', [FirstController::class, 'helloFancy'])->name('fancy');

});


Route::get('calc', [C::class, 'show'])->name('show');
Route::post('calc', [C::class, 'doCalc'])->name('do-calc');





Route::get('/sum/{a}/{b?}', [FirstController::class, 'sum']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
