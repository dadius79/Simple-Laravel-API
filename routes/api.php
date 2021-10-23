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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('students', 'App\Http\Controllers\ApiController@getAllStudents');
Route::get('student/{id}', 'App\Http\Controllers\ApiController@getStudent');
Route::post('student/create', 'App\Http\Controllers\ApiController@createStudent');
Route::put('student/update/{id}', 'App\Http\Controllers\ApiController@updateStudent');
Route::delete('student/delete/{id}', 'App\Http\Controllers\ApiController@deleteStudent');
