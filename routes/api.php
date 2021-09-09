<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\API\PacienteController;
use App\Http\Controllers\API\AutenticarController;

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

Route::apiResource('/tasks', TaskController::class);



Route::post('registro', [AutenticarController::class, 'registro']);
Route::post('acceso', [AutenticarController::class, 'acceso']);

Route::group(['middleware' => ['auth:sanctum','authadmin']], function(){

    Route::post('cerrarsesion', [AutenticarController::class, 'cerrarsesion']);
    Route::apiResource('/pacientes',PacienteController::class);
});


Route::post('/reset', 'ResetController@reset');

Route::get('/balance', 'BalanceController@show');

Route::post('/event', 'EventController@store');


