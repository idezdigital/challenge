<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user/get/{key}', [App\Http\Controllers\UserController::class, 'showLikeName']);
Route::get('/user/getdoc/{key}', [App\Http\Controllers\UserController::class, 'showDocument']);

Route::apiResources([
    'user' => UserController::class,
    'account' => AccountController::class,
    'transaction' => TransactionController::class
]);
