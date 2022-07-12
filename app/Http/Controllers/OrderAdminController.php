<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donhang;

class OrderAdminController extends Controller
{
    public function showOrder(){
        $data = donhang::paginate(5);
        return view('adminpages/OrderManagement', ['donhang' => $data]);
    }
    public function delete($id){
        $data = donhang::find($id);
        $data->delete();
        return redirect('admin/OrderManagement');
    }
}
