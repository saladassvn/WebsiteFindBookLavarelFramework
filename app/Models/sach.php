<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class sach extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'sach';
    public $timestamps = false;
    protected $primaryKey = 'MaSach';
    protected $fillable = ['Mã Sách', 'Tên Sách', 'Danh Mục', 'Mô Tả', 'Đơn Giá'];
    public $sortable = ['MaSach', 'TenSach', 'DanhMuc', 'MoTa', 'HinhAnh', 'DonGia']; 
}
