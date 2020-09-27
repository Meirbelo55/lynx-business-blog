<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\getDataController;
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
//Route::get('signin', function() {
    //return view('signin');
//});
//Route::get('signin', [userController::class, 'create']);
Route::post('signin', [userController::class, 'store']);

//Route::match(['get', 'post'], 'signin', [userController::class, 'create']);
//Route::redirect('/here', '/',301);
//Route::view('/welcomemeir', 'welcomemeir', ['name' => 'Taylor']);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //return view('dashboard');
//})->name('dashboard');
Route::get('dashboard', [userController::class, 'checkUser']);
Route::post('addData', [getDataController::class, 'sendData']);
