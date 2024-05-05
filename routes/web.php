<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// Internal routing
Route::get('/home',function(){
    return '<h1>Welcome to Laravel</h1>';
});
// Nullable parameter
Route::get('/user/{user?}',function($user="user"){
    return "<h1>Welcome to $user</h1";
});
// Unknow on browser
Route::post('/username/{username?}',function($username='username'){
    return "<h1>Hello $username</h1>";
});
// External routing
Route::get('/welcome',[UserController::class,'welcome']);
Route::get('/hello/{user?}',[UserController::class,'user']);