<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('users', 'App\Http\Controllers\Api\User\Controller@getAllUsers');
Route::get('users/{id}', 'App\Http\Controllers\Api\User\Controller@getUserById');
Route::post('users', 'App\Http\Controllers\Api\User\Controller@createUser');

Route::post('gifts', 'App\Http\Controllers\Api\Gift\Controller@createGift');
Route::delete('gifts/{id}', 'App\Http\Controllers\Api\Gift\Controller@deleteGiftById');



