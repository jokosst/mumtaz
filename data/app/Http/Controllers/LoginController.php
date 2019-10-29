<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $Request){
          $admin = "admin";
          $guru = "guru";

   	  if (\Auth::attempt(['username' => $Request->username, 'password' => $Request->password,'level' => $admin])) {
            // Authentication passed...
            return redirect()->intended('/');
        } elseif  (\Auth::attempt(['username' => $Request->username, 'password' => $Request->password,'level' => $guru])) {
            // Authentication passed...
            return redirect()->intended('/mobile');
        }else  {
          return back()->with('error', 'Cek Lagi username atau password anda');
        }
  		
   }
   public function logout(Request $request)
    {
    	\Auth::logout();

    	return redirect('/login');
    }
}
