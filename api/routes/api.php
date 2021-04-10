<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// PUBLIC ROUTES
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


// AUTHENTICATED ROUTES
Route::middleware('auth:sanctum')->group(function (){
    Route::resource('users', UserController::class);
    // METHOD      URI                     NAME            CONTROLLER ACTION
    // GET|HEAD    api/users               users.index     UserController@index
    // POST        api/users               users.store     UserController@store
    // GET|HEAD    api/users/create        users.create    UserController@create
    // GET|HEAD    api/users/{user}        users.show      UserController@show
    // PUT|PATCH   api/users/{user}        users.update    UserController@update
    // DELETE      api/users/{user}        users.destroy   UserController@destroy
    // GET|HEAD    api/users/{user}/edit   users.edit      UserController@edit
});