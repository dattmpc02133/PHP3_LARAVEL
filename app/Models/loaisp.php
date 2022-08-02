<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    // use HasFactory;
    protected $table = 'loaisp';
    protected $primaryKey = 'ma_loai';
    // protected $keyType = 'bigInteger';
    protected $fillable = [
        'ma_loai',
        'ten_hh',
        'urlHinh',
    ];
}
