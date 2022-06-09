<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/editmyuser', function () {
    return view('edituser');
});


Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
Route::get('/editmyuser',[UserController::class,'getuser']);
Route::post('/useredit',[UserController::class,'edituser']);
Route::get('/userlist',[UserController::class,'search']);
Route::post('/userlist',[UserController::class,'search']);
Route::get('/userdelete',[UserController::class,'deleteuser']);
Route::post('/newuser',[UserController::class,'adduser']);
Route::get('/newuser',[UserController::class,'adduser']);