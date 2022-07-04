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

        if(($user[0]->MatKhau)==$request->input('password')){
            $request->session()->put('userName', $user[0]->TenKH);
            $request->session()->put('userID', $user[0]->MaKH);
            return redirect('/');
        }

        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }

    public function storeRe(Request $r){
        $email = $r->email;
        $password = $r->pasword;
        $username = $r->username;
        $sdt = $r->sdt;
        $diachi = $r->diachi;


    }

}
