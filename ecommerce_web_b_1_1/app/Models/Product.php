<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product, $image, $imgNewName, $directory, $imgUrl, $extension ,$imageUrl;


    private static  function getImgUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imgNewName   = rand().'.'. self::$image ->getClientOriginalExtension();
        self::$directory    ='product-image/';
        self::$image->move(self::$directory ,self::$imgNewName);
        self::$imgUrl       = self::$directory .self::$imgNewName;
        return self::$imgUrl;
    }


    public static function addNewProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id         = $request->category_id;
        self::$product->sub_category_id     = $request->sub_category_id;
        self::$product->brand_id            = $request->brand_id;
        self::$product->name                = $request->name;
        self::$product->code                = $request->code;
        self::$product->short_description   = $request->short_description;
        self::$product->long_description    = $request->long_description;
        self::$product->regular_price       = $request->regular_price;
        self::$product->selling_price       = $request->selling_price;
        self::$product->stock_amount        = $request->stock_amount;
        self::$product->image               = self::getImgUrl($request);
        self::$product->save();
        return self::$product;
    }



    public static function updateProductInfo($request,$id){
        self::$product=Product::find($id);
        if ($request->file('image')){
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$imageUrl=self::getImgUrl($request);

        }
        else{
            self::$imageUrl=self::$product->image;
        }
        self::$product->category_id = $request->category_id;
        self::$product->sub_category_id = $request->sub_category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->name = $request->name;
        self::$product->code = $request->code;
        self::$product->short_description = $request->short_description;
        self::$product->long_description = $request->long_description;
        self::$product->regular_price = $request->regular_price;
        self::$product->selling_price = $request->selling_price;
        self::$product->stock_amount = $request->stock_amount;
        self::$product->image = self::$imageUrl;
        self::$product->save();
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function otherImages()
    {
        return $this->hasMany(OtherImage::class);
    }

}
