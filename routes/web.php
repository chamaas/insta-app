<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClientController;
use App\http\controllers\AdminController;
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

Route::get('/',[ClientController::class,'hom']);
Route::get('profile/' , [ClientController::class , 'profile']);
Route::get('edit_profile/' , [ClientController::class , 'edit_profile']);
Route::get('admin/' , [AdminController::class , 'dashboard']);
