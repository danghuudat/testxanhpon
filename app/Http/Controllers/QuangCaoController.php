<?php

namespace App\Http\Controllers;

use App\LichMo;
use App\QuangCao;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Excel;

class QuangCaoController extends Controller{
    public function index(){
        $data=QuangCao::all();
        return view('xuongkhop.quangcao')->with(['quangcao'=>$data]);
    }
    public function add(Request $request){
        QuangCao::insert(['link'=>$request->link]);
        return "ok";
    }
    public function delete(Request $request){
        QuangCao::where(['id'=>$request->id])->delete();
        return "ok";
    }
    public function truncate(Request $request){
        QuangCao::truncate();
        return "ok";
    }
}