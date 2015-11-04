<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\LoginRequest;
use App\User;
class LoginController extends Controller
{
 public function login(LoginRequest $request)
 {
 
   $credentials = $request->only('email', 'password');
   if(Auth::attempt($credentials)){
    
        return redirect()->route('socket');
   }
   else{
    return 'The username and password do not match';
   }
 }

public function logout()
 {
 
    Auth::logout();
    return redirect()->route('index');
}
}
