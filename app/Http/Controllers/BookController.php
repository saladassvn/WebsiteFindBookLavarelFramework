<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function search(Request $request){

        $q = $request->get('query');
        if($q != ""){
            //$sach = DB::where('TenSach','LIKE','%'.$q.'%')->get();
            $sach = DB::select("SELECT * from sach where TenSach like '%$q%'");

            if(count($sach) > 0){
                return view('pages.book')->withDetails($sach)->withQuery($q);
            }
        }
        return view('pages.book')->withMessage("Không tìm thấy sách bạn cần tìm");

 
    }

    public function returnAllBook(){
        
        $sach = DB::select("SELECT * FROM sach");

        return view('pages.book')->withDetails($sach);
    }

    public function returnBestSellingBook(){
        
        $sach = DB::select("SELECT * FROM sach WHERE DanhMuc = 'Bán chạy' ORDER BY MaSach ASC");

        return view('pages.book')->withDetails($sach);
    }

    public function returnFeatureBook(){
        
        $sach = DB::select("SELECT * FROM sach WHERE DanhMuc = 'Nổi bật' ORDER BY MaSach ASC");

        return view('pages.book')->withDetails($sach);
    }

    public function returnDetailBook(){
        
    }

    
}
