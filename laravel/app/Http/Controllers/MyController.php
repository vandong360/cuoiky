<?php

namespace App\Http\Controllers;

use App\DatLich;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\San;
use App\Quan;
use App\User;
use Carbon\Carbon;
use Mail;
use \App\Mail\SendMail;
use DB;
class MyController extends Controller
{
    public function getdangnhap() {
        return view('dangnhap');
    }


    //Route Quan:
    public function indexQuan($idQuan) {

        $quan = Quan::find($idQuan);
        $data = Quan::find($idQuan)->data()->get();
        
        return view('layouts.mainDatsan', compact('data'), compact('quan'));
    } 
    

    //Route San chi tiet: 
    public function indexSan($idSan, Request $request) {

        $df = [
            '6h00 - 7h30',
            '7h30 - 9h00',
            '9h00 - 10h30',
            '15h00 - 16h30',
            '16h30 - 18h00',
            '18h00 - 19h30',
            '19h30 - 21h00',
            '21h00 - 22h30',
        ];

        $now = Carbon::now('Asia/Ho_Chi_Minh'); 
        // $date = DatLich::where('date' , $now->toDateString())->get();
        
        $get = San::find($idSan);

        return view('function.indexSan', compact('get', 'now', 'df'));
    }
    
    public function getDate(Request $request, $idSan) {

        $arr1 = [
            '6h00 - 7h30',
            '7h30 - 9h00',
            '9h00 - 10h30',

            '15h00 - 16h30',
            '16h30 - 18h00',
            '18h00 - 19h30',
            '19h30 - 21h00',
            '21h00 - 22h30',
        ];

        $get = DatLich::where('idSan', $idSan)->where('date', $request->date)->get()->all();  
        $arr2 = [];
        $date = $request->date;

        foreach( $get as $key=>$value ){ 
            $arr2[] = $value->time;
        }
        
        
        $df = array_diff($arr1, $arr2);

        $now = Carbon::now('Asia/Ho_Chi_Minh'); 
        $get = San::find($idSan);
        $name = $get->tenSan;

        return view('function.indexSan', compact('get', 'now', 'df', 'date', 'name'));
    }


    public function pushData(Request $request){

        $date = $request->date;
        $name = $request->name;
        $time = $request->time;
        $id = $request->id;
        
        return view('function.book', compact('date', 'name', 'time', 'id'));
    }

    public function store(Request $request)
    {
        $new = new DatLich;
        $new->idUser = $request->idUser;
        $new->idSan = $request->idSan;
        $new->tenSan = $request->tenSan;
        $new->tenKH = $request->tenKH;
        $new->sdt = $request->sdt;
        $new->date = $request->date;
        $new->time = $request->time;
        $new->note = $request->note;
        $new->save();

        $send = [
            'name'  => $request->tenKH,
            'sdt'   => $request->sdt,
            'note'  => $request->note,
            'tenSan'=> $request->tenSan,
            'date'  => $request->date,
            'time'  => $request->time
        ];

        \Mail::to($request->email)->send(new SendMail($send));

        return redirect()->route('page');
    }

    // Admin quan ly
    public function listUser() {

        $data = DB::table('users')->get();
        return view('function.listUser', compact('data'));
    }  
    
    public function listBook() {

        $san = DB::table('san')->get();
        $book = DB::table('book')->where('idUser','<>','1')->where('idUser','<>','2')->get();

        return view('function.listBook', compact('san', 'book', 'san'));
    } 

    public function destroy($id)
    {
        $des = User::findOrFail($id);
        $des->delete();
        
        return redirect()->back();
    }


}
