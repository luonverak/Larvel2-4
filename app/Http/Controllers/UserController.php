<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Web
    public function welcome(){
        return '<h1>Welcome to Laravel day 1</h1>';
    }
    public function user($user='user'){
        return '<h1>Hello '.$user.'</h1>';
    }
    // Api
    public function welcomeApi(){
        return response([
            'message'=>'Welcome to Laravel'
        ]);
    }
    public function userApi($user='user'){
        return response([
            'user'=>'Welcome to '.$user.''
        ]);
    }
}
