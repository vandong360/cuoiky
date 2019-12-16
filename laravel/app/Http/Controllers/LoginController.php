<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function getReg() {
    	return view('function.register');
    }
    
    public function postReg(Request $request) {
    	$this->validate($request,
            [
                'email'         => 'unique:users,email',
                'password'      => 'min:5|max:15',
                'name'          => 'min:2|max:8',
                're_password'   => 'same:password'
            ],
            [
                'email.unique'  => 'Email đã có người sử dụng!',
                'password.min'  => 'password trên 5 ký tự!',
                'password.max'  => 'password quá dài!',
                'name.min'      => 'Tên tài khoản quá ngắn!',
                'name.max'      => 'Tên tài khoản quá dài!', 
                're_password.same' => 'password không giống nhau!'            
            ]
            ); 
            
        $table = new User;
        $table->name = $request->name;
        $table->admin = $request->admin;
        $table->email = $request->email;
        $table->password = Hash::make($request->password);
        $table->save();

        return redirect()->route('login')->with('error', 'Tạo tài khoản thành công!');
    }


    public function getLogin() {
    	return view('function.dangnhap');
    }

    public function postLogin(Request $request) {

        $arr = [
            'email'    => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($arr)) {
            // successfully
            return redirect()->route('page');
        }  else {
            //Fail
            return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không chính xác!');
        }
    }
	
}