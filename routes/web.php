<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\andromedaspController;
use App\Http\Controllers\andromedaposController;
use App\Http\Controllers\landing2Controller;

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
    return view('landing2');
});

// Route::get('/hello', [dashbordController::class, 'hello'])->name('alam');

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });


Route::get('/andromedasp', [andromedaspController::class, 'index'])->name('andromedasp');

Route::get('/andromedapos', [andromedaposController::class, 'index'])->name('andromedapos');

Route::get('/landing2', [landing2Controller::class, 'index'])->name('landing2');