<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

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
            'MatKhau.required' => 'Mật khẩu là trường bắt buộc'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('admin/login')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $Email = $request->input('Email');
            $MatKhau = $request->input('MatKhau');
     
            if( Auth::attempt(['Email' => $Email, 'MatKhau' =>$MatKhau])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                return redirect('admin/IndexAdmin');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('admin/login');
            }
        }
    }
    public function getLogout()
    {
    }
}

