<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'cost',
        'is_active',
        'in_stock',
        'notes',
    ];


    public static function  getpProducts()
    {
        return self::where(
            [
                ['is_active', 1],
                ['in_stock', '>', 0]
            ]
        )->get([
            'product_name',
            'cost',
            'in_stock',
            'notes',
        ]);
    }

    public static function  updateProduct($id, $quantity)
    {
        $product = self::find($id);
        $product->in_stock = $product->in_stock - $quantity;


        $product->save();
    }
}