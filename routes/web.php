<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StudentsController;
use \App\Http\Controllers\blaController;
use \App\Http\Controllers\userAuth;
use \App\Http\Controllers\apiController;


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
    //return 'Hello World from Laravel';
});

Route::get('contact', function () {
    return view('contact');
    //return 'Contact Us';
});
Route::view('about', 'about');

Route::get('students', [StudentsController::class,'list']);
Route::get('delete/{id}', [StudentsController::class, 'deleteData']);
Route::get('edit/{id}', [StudentsController::class, 'editData']);
Route::post('edit', [StudentsController::class, 'updateData']);
Route::get('findStudent/{key}', [StudentsController::class, 'findStudent']);

Route::get('apiData', [apiController::class, 'view']);
Route::get('getApiData', [apiController::class, 'apiData'])->name('getApiData');


Route::get('studentRegistrationForm', [StudentsController::class, 'view']);
Route::post('studentRegistrationForm', [StudentsController::class, 'store']);

//**************************Login**************************************************************
Route::get('login',[userAuth::class,'view']);
Route::post("loginCheck", [userAuth::class, 'userCheck']);

Route::get('home', function () {
    if(session()->has('user')){
        return view('home');
    }
    return redirect('login');
});
Route::get('/logout', function (){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});
//**************************End of Login**************************************************************

//Test Purpose Only

Route::view('upload', 'uploadCheck');
Route::post('uploadCheck', [blaController::class, 'uploadCheck']);

Route::view('blabla', 'blabla');
Route::get('check', [blaController::class, 'view']);
Route::post('check', [blaController::class, 'store']);
Route::post("blaLogin", [blaController::class, 'loginCheck']);
Route::get('check', function () {
    if(session()->has('bla')){
        return redirect('blabla');
    }
    return redirect('check');
});

