<?php

use App\Http\Controllers\QController;
use App\Models\allclients;
use Illuminate\Support\Facades\Route;

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

Route::get('/Queue/lobby', function () {
    return view('Queue.lobby');
});
Route::get('/Queue/monitor',[QController::class, 'all_client'])->name('Queue.monitor');

Route::post('/Queue/lobby', [QController::class, 'add_client'])->name('Queue.addtoque');


Route::get('/Queue/scholar', function () {
 return view ('Queue/scholar');   
});