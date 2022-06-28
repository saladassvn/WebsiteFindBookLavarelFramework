<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function login(){

        return view('pages.login');
    }

    public function register(){

        return view('pages.register');
    }

    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
                'Email' => $request->input('email'),
                'MatKhau' => $request->input('password')
            ])) {

            return redirect()->route('/login');
        }


        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();

    }

}
