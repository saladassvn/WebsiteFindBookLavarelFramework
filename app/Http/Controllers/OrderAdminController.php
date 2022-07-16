<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donhang;

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
        return view('adminpages/DetailOrder', ['donhang' => $donhang]);
    }
    public function delete($id){
        $data = donhang::find($id);
        $data->delete();
        return redirect('admin/OrderManagement');
    }
}
