<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function index(){

        $id = Session::get('userID');
        $user = DB::select("SELECT * from taikhoan where MaKH like '%$id%'");

        return view('pages.user')->withDetails($user[0]);;
    }

    public function edit(Request $r){

        $user_name = $r->input('ten');
        $user_sdt = $r->input('sdt');
        $user_dc = $r->input('dc');
        $user_id = $r->input('id');

        DB::update('update taikhoan set TenKH=?,Phone=?,DiaChi=? where MaKH=?',[$user_name,$user_sdt,$user_dc,$user_id]);
        
        session()->put('userName', $user_name);

        return redirect('/');
        
    }

    public function vieworder(){

        return view('pages.viewOrder');
    }

    public function viewcart(){
        return view('pages.cart');
    }

    
}
