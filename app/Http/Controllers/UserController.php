<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\donhang;
use App\Models\chitietdonhang;
use App\Models\sach;
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

        return redirect('/')->with('edit',"Cập nhật thông tin cá nhân thành công");;
        
    }

    public function vieworder(){
        $name = Session::get('userName');

        $data = donhang::where('TenKH','LIKE',"%$name%")->get();

        return view('pages.viewOrder')->withDetails($data);;
    }

    public function detailOrder($id){
        $donhang = donhang::find($id);
        
        $chitiet = DB::table('donhang')
    ->select('sach.TenSach',  'sach.HinhAnh', 'donhang.MaDH', 'chitietdonhang.DinhLuong', 'chitietdonhang.Gia')
    ->join('chitietdonhang', 'donhang.MaDH', '=', 'chitietdonhang.MaDH')
    ->join('sach','sach.MaSach','=','chitietdonhang.MaSach')
    ->where('donhang.MaDH', $id)
    ->get();
        $result = json_decode($chitiet, true);

        return view('pages/detailOrder', ['donhang' => $donhang, 'chitiets' => $result]);
    }

    public function viewcart(){
            if (!Session::has('cart')) {
                return view('pages.cart');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }

        
        return redirect()->route('viewcart');

    }

    
}
