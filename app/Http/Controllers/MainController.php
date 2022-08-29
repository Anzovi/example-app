<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function sendName(request $request){
        $FIO = $request->input('FIO');
        $ret = $FIO.'- привет';
        return json_encode($ret);
    }
}
