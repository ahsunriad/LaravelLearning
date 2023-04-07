<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;
use  App\Http\Controllers\dummyController;
use App\Http\Controllers\userController;

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
Route::get('data',[dummyApi::class, 'getData']);
Route::post('setData', [dummyApi::class, 'setData']);
Route::put('update', [dummyApi::class, 'updateData']);
Route::delete('deleteStudent/{id}', [dummyApi::class, 'deleteStudent']);
Route::get('searchStudent/{name}', [dummyApi::class, 'searchStudent']);
Route::post('checkValidation', [dummyApi::class, 'checkValidation']);
Route::apiResource('dummyController', dummyController::class);

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's

});
Route::post("login",[UserController::class,'index']);
