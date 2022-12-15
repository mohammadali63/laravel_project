<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product,$image,$imageNewName,$directory,$imageUrl;

    public static function saveProduct($request)
    {
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->category_name = $request->category_name;
        self::$product->barand_name = $request->barand_name;
        self::$product->description = $request->description;
        self::$product->image = $request->image;
        self::$product->save();
    }
}
