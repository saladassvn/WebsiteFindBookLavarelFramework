<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donhang;
use App\Models\chitietdonhang;
use App\Models\sach;
use Illuminate\Support\Facades\DB;

class OrderAdminController extends Controller
{
    public function showOrder(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $data = donhang::where('TenKH','LIKE',"%$search%")->get();
        }
        else{
            $data = donhang::paginate(5);
        }
        $dt = compact('data', 'search');
        return view('adminpages/OrderManagement')->with($dt);
    }
    public function detail($id){
        $donhang = donhang::find($id);
        $chitiet = DB::table('donhang')
        ->select('sach.TenSach',  'sach.HinhAnh', 'donhang.MaDH', 'chitietdonhang.DinhLuong', 'chitietdonhang.Gia')
        ->join('chitietdonhang', 'donhang.MaDH', '=', 'chitietdonhang.MaDH')
        ->join('sach','sach.MaSach','=','chitietdonhang.MaSach')
        ->where('donhang.MaDH', $id)
        ->get();
        $chitietdonhang = json_decode($chitiet, true);
        $dt = compact('donhang', 'chitietdonhang');
        return view('adminpages/DetailOrder')->with($dt);
    }
    public function delete($id){
        $data = donhang::find($id);
        $data->delete();
        return redirect('admin/OrderManagement');
    }
}
