<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    // use HasFactory;
    protected $table = 'loaisp';
    protected $primary = 'ma_loai';
    protected $fillable = [
        'ma_loai',
        'ten_hh',
        'urlHinh',
    ];
}
