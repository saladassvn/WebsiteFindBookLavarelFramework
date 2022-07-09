<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sach;

class IndexAdminController extends Controller
{
    public function show(){
        $sachs = sach::paginate(5);
        return view('adminpages/IndexAdmin', ['sach' => $sachs]);        
    }
    public function delete($id){
        $data = sach::find($id);
        $data->delete();
        return redirect('admin/IndexAdmin');
    }
    public function showData($MaSach){
        $data = sach::find($MaSach);
        return view('adminpages/ProductUpdate', ['sach' => $data]);
    }
    public function update(Request $req){
        $data = sach::find($req->MaSach);
        $data->TenSach=$req->get('TenSach');
        $data->DanhMuc=$req->get('DanhMuc');
        $data->DonGia=$req->get('DonGia');
        $data->HinhAnh=$req->get('HinhAnh');
        $data->MoTa=$req->get('MoTa');
        $data->save();
        return redirect('admin/IndexAdmin');
    }
    public function AddData(Request $req){
        $data = new sach;
        $data->TenSach=$req->get('TenSach');
        $data->DanhMuc=$req->get('DanhMuc');
        $data->DonGia=$req->get('DonGia');
        $data->HinhAnh=$req->get('HinhAnh');
        $data->MoTa=$req->get('MoTa');
        $data->save();
        return redirect('admin/IndexAdmin');
    }

}
