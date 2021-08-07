<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', [MainController::class, 'index']);

Route::get('/get/bottle', [MainController::class, 'get_bottle']);

Route::get('/get/bottle/all', [MainController::class, 'get_bottle_all']);

Route::post('/tambah/memory', [MainController::class, 'throw_bottle']);