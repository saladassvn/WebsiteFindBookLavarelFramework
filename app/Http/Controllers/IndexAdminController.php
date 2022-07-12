<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sach;
use Illuminate\Support\Facades\File;

class IndexAdminController extends Controller
{
    public function show()
    {
        $sachs = sach::paginate(5);
        return view('adminpages/IndexAdmin', ['sach' => $sachs]);
    }
    public function delete($id)
    {
        $data = sach::find($id);
        $path = public_path('../public/User/img/').$data->HinhAnh;
        if(File::exists($path)){
            File::delete($path);
        }
        $data->delete();
        return redirect('admin/IndexAdmin')->with('success','Xóa thành công');
    }
    public function showData($MaSach)
    {
        $data = sach::find($MaSach);
        return view('adminpages/ProductUpdate', ['sach' => $data]);
    }
    public function update(Request $req)
    {
        $data = sach::find($req->MaSach);
        $data->TenSach = $req->get('TenSach');
        $data->DanhMuc = $req->get('DanhMuc');
        $data->DonGia = $req->get('DonGia');
        $data->HinhAnh = $req->HinhAnh;
        $data->MoTa = $req->get('MoTa');
        $data->save();
        return redirect('admin/IndexAdmin');
    }
    public function AddData(Request $req)
    {
        $data = new sach;
        $data->TenSach = $req->get('TenSach');
        $data->DanhMuc = $req->get('DanhMuc');
        $data->DonGia = $req->get('DonGia');
        $data->HinhAnh = $req->HinhAnh->getClientOriginalName();

        $gethinhanh = '';
        if ($req->hasFile('HinhAnh')) {
            $this->validate(
                $req,
                [
                    //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 10M
                    'HinhAnh' => 'mimes:jpg,jpeg,png,gif|max:10240',
                ],
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'HinhAnh.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'HinhAnh.max' => 'Hình thẻ giới hạn dung lượng không quá 10M',
                ]
            );
            $hinhanh = $req->file('HinhAnh');
            $gethinhanh = $hinhanh->getClientOriginalName();
            $destinationPath = public_path('../public/User/img');
            $hinhanh->move($destinationPath, $gethinhanh);
        }

        $data->MoTa = $req->MoTa;
        $data->save();
        return redirect('admin/IndexAdmin');
    }
}
