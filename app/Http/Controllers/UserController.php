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

    public function update(){
        
    }

    
}
