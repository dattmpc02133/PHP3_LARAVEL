<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'hang_hoa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ten_hh',
        'don_gia',
        'giam_gia',
        'hinh_hh',
        'trang_thai',
        'mo_ta',
        'id_loai',
    ];
}
