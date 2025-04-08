<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    // Tên bảng
    protected $table = 'site_settings';

    // Khóa chính
    protected $primaryKey = 'id';

    // Các cột được phép gán giá trị
    protected $fillable = [
        'logo',
        'support_phone',
        'phone_one',
        'email',
        'company_address',
        'facebook',
        'zalo',
        'youtube',
        'copyright',
    ];

    // Tự động thêm timestamps
    public $timestamps = true;
}
