<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'nhanvien'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'Ma_NV'; // Khóa chính của bảng

    protected $fillable = ['Ma_NV', 'Ten_NV', 'Phai', 'Noi_Sinh', 'Ma_Phong', 'Luong']; // Các trường có thể được gán giá trị

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'Ma_Phong', 'Ma_Phong');
    }
}
