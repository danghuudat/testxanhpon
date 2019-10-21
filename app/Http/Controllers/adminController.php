<?php

namespace App\Http\Controllers;

use App\LichMo;
use App\QuangCao;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Excel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lich= LichMo::all();
        return view('xuongkhop.admin')->with('lich', $lich);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return LichMo::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LichMo::insert($request->all());
        return "ok";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data=$request->id;
        $lich=LichMo::where(['ID'=>$data])->get();
        return $lich;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        $this->validate($request,[
            'selectFile'=>'required|mimes:xls,xlsx'
        ]);
        $path=$request->file('selectFile')->getRealPath();
        $data =\Excel::load($path)->get();
        if($data->count()>0){
            $insert_data=[];
            foreach($data->toArray()[0] as $key =>$value){
                if (isset($value['ten_tuoi'])){
                    $data3=array(
                        'tentuoi'=>$value['ten_tuoi'],
                        'ppphauthuat'=>$value['phuong_phap_phau_thuat'],
                        'ptv'=>$value['phau_thuat_vien'],
                        'trangthai'=>$value['trang_thai'],
                        'chandoan'=>$value['chan_doan'],

                    );
                    array_push($insert_data,$data3);
                }
            }
            LichMo::insert($insert_data);
        }
        return back()->with('success','import thành công');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        unset($request->id);
        LichMo::where(['ID'=>$id])->update(['tentuoi'=>$request->tentuoi,'ppphauthuat'=>$request->ppphauthuat,'ptv'=>$request->bsphauthuat,'trangthai'=>$request->trangthai]);
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        LichMo::where(['id'=>$request->id])->delete();
        return "delete success";
    }
    public function truncate(Request $request)
    {
        LichMo::truncate();
        return "delete success";
    }
    public function indexNguoidung(){
        $data=LichMo::all();
        $quangcao=QuangCao::all();
        return view("xuongkhop.nguoidung")->with(['lich'=>$data,'quangcao'=>$quangcao]);
    }
}
