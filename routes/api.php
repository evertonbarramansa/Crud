<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
/*{(
    Route::get('carros', 'ApiController@getAllcarros');
Route::get('carros/{id}', 'ApiController@getcarros');
//Route::get('carros, 'ApiController@createcarros');
Route::put('carros/{id}', 'ApiController@updatecarro');
Route::delete('carros/{id}','ApiController@deletecarro');
});
