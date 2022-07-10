<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class LoginAdminController extends Controller
{

    public function getLogin()
    {
        return view('adminpages/LoginAdmin');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'Email' =>'required',
            'MatKhau' =>'required',
        ];
        $messages = [
            'Email.required' => 'Email là trường bắt buộc',
            'MatKhau.required' => 'Mật khẩu là trường bắt buộc',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return redirect('admin/login')->withErrors($validator)->withInput();
        }
        else{
            $admin = DB::table('taikhoanqt')->where('Email', $request->input('Email'))->get();
            if(($admin[0]->MatKhau)==$request->input('MatKhau')){
                $request->session()->put('AdminName', $admin[0]->Email);
                return redirect('admin/IndexAdmin');
           }else{
                Session::flash('error', 'Email hoặc Password không đúng');
                return redirect('admin/Login');
           }
        }
    }
    public function Logout(Request $request)
    {
        $request -> session() -> forget('AdminName');
        return redirect('admin/login')->with('notice', 'Đăng xuất thành công');
    }
}

