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
        if ($request->product_id){
            self::$product = Product::find($request->product_id);
        }else{
            self::$product = new Product();
        }
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->barand_name = $request->barand_name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        if ($request->image){
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$product->image = self::saveImage($request);
        }
        self::$product->save();
    }


    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='adminAsset/product-image/';
        self::$imageUrl=self::$directory.  self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imageUrl;
    }
    public static function statusProduct($id)
    {
        self::$product = Product::find($id);
        if (self::$product->status == 1)
        {
            self::$product->status = 0;
        }
        else
        {
            self::$product->status = 1;
        }
        self::$product->save();
    }
    public static function ProductDelete($request){
        self::$product=Product::find($request->product_id);
        if (self::$product->image){
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
        }
        self::$product->delete();
    }
}
