<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class LoginController extends Controller
{
    public function getdangnhap() {
    	return view('function.dangnhap');
    }

    public function postdangnhap(Request $request) {
    	
        $arr = ['email' => $request -> email, 'password' => $request -> password];
        
    	if($request -> remember = 'Remember Me'){
    		$remember = true;
        }
        
    	else{
    		$remember = false;
        }
        
    	if(Auth::attempt($arr,$remember))
    	{
    	 	return redirect('/user');
        }
        
    	else{
    		return back()->withInput()->with('error','The account or password is incorrect');
    	}
	}
	
}