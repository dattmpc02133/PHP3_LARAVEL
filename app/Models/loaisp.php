<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    // use HasFactory;
    protected $table = 'loaisp';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'ten_hh',
        'urlHinh',
    ];
}
