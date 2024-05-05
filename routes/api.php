<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/username/{username?}',function($username='username'){
    return response()->json(
        [
            'usernmae'=>$username
        ]
        );
});

Route::get('/user',function(){
    return response([
        'user'=>'Luon Verak'
    ]);
});

// 
Route::get('/welcome',[UserController::class,'welcomeApi']);
Route::get('/user-api/{user?}',[UserController::class,'userApi']);