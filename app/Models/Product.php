<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'id_type',
        'description',
        'unit_price',
        'promotion_price',
        'image',
        'unit',
        'new'
    ];

    // Lấy tất cả sản phẩm
    // public static function getAllProducts()
    // {
    //     return self::all();
    // }

    // Lấy sản phẩm mới (new = 1)
    // public static function getNewProducts()
    // {
    //     return self::where('new', 1)->get();
    // }

    // Lấy sản phẩm theo loại (id_type)
    // public static function getProductsByType($id_type)
    // {
    //     return self::where('id_type', $id_type)->get();
    // }
}

