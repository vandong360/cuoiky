<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests;

class MyController extends Controller
{
    public function getdangnhap(){
        return view('dangnhap');
    }
}
