<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getLogin() {
        return view('login');
    }
    public function postLogin(Request $request){
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect('xuongkhop');
        }
        else{
            return back()->with('loi','Sai tên tài khoản hoặc mật khẩu.');
        };
    }
}
