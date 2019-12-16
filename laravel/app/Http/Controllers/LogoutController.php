<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LogoutController extends Controller
{
    public function getLogout() {
        Auth::logout();

        return redirect()->route('page');
    }
}
