<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\sach;
use Session;
use App\Models\Cart;

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

    public function returnNewestBook(){
        
        $sach = DB::select("SELECT * FROM sach ORDER BY MaSach DESC");

        return view('pages.book')->withDetails($sach);
    }

    public function returnCheapToHigh(){
        
        $sach = DB::select("SELECT * FROM sach ORDER BY DonGia ASC");

        return view('pages.book')->withDetails($sach);
    }

    public function returnHighToCheap(){
        
        $sach = DB::select("SELECT * FROM sach ORDER BY DonGia DESC");

        return view('pages.book')->withDetails($sach);
    }

    public function returnDetailBook($MaSach){
        $sach = DB::select("SELECT * FROM sach WHERE MaSach = '$MaSach'");

        return view('pages.bookDetail')->withDetails($sach);
        
    }

    public function addtocart(Request $request, $MaSach){
        $sach = sach::find($MaSach);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new cart($oldCart);
        $cart->add($sach, $sach->MaSach,$request->input('sl'));

        $request->session()->put('cart', $cart);
        

        return redirect('book')->with('bookadd',"Thêm vào giỏ hàng thành công");
    }

    public function checkout(){
        if(!Session::has('cart')){
            return view('viewcart');
        }
        if(Session::has('userID')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $total = $cart->totalPrice;
            return view('pages.checkout', ['total' => $total]);
        }else{
            return redirect('viewcart')->with('loginRequired',"Bạn phải đăng nhập để mua hàng");
        }

    }

    public function postCheckOut(Request $r){
        if(!Session::has('cart')){
            return redirect('pages.cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        
        $name = $r->input('name');
        $sdt = $r->input('sdt');
        $dc = $r->input('dc');
        $pttt = $r->input('pttt');
        $tt = $cart->totalPrice;

        DB::insert('insert into donhang (MaDH, TenKH, Phone, DiaChi, HTTT, TongTien) values (?,?,?,?,?,?)',[NULL, $name, $sdt, $dc, $pttt, $tt]);
        $id=DB::select("SHOW TABLE STATUS LIKE 'donhang'");
        $next_id=$id[0]->Auto_increment - 1;
        foreach($cart->items as $book){
            DB::insert('insert into chitietdonhang (MaCT, MaDH, MaSach, DinhLuong, Gia) values (?,?,?,?,?)', [NULL, $next_id, $book['item']['MaSach'], $book['qty'], $book['price']]);
        }

        Session::forget(['cart']);
        return redirect('homepage')->with('success',"Bạn đã đặt mua thành công! Bạn vui lòng đợi quản trị viên liên lạc với bạn để xác minh đơn hàng.");


    }


}
