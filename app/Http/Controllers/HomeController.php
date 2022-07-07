<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function login(){

        return view('pages.login');
    }

    public function logout (Request $r){

        $r -> session()->forget('userName');
        $r -> session()->forget('userID');
        return redirect('/');
    }

    public function register(){

        return view('pages.register');
    }

    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        $user = DB::table('taikhoan')->where('email', $request->input('email'))->get();

        if(count($user) != 0){
            if(($user[0]->MatKhau)==$request->input('password')){
                $request->session()->put('userName', $user[0]->TenKH);
                $request->session()->put('userID', $user[0]->MaKH);
                return redirect('/');
            }  
        }

        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }

    public function storeRe(Request $r){
        $this->validate($r, [
            'email' => 'required|email:filter',
            'password' => 'required',
            'username' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',

        ]);
        
        $user = DB::table('taikhoan')->where('email', $r->input('email'))->first();
        
        if($user === null){
            $email = $r->email;
            $password = $r->password;
            $username = $r->username;
            $sdt = $r->sdt;
            $diachi = $r->diachi;

            DB::table('taikhoan')->insert(
                ['Email' => $email, 'MatKhau' => $password, 'Phone' => $sdt, 'DiaChi' => $diachi, 'TenKH' => $username,]
            );


            return view('pages.login');
        }
   
        Session::flash('error', 'Email đã tồn tại trong hệ thống');
        return redirect()->back();
        


    }

}
