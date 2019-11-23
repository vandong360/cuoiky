<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function getLogout() {
        // Auth::logout();
        return redirect('/dangnhap');
    }
}
