<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    private static $brand, $image, $imgUrl, $drictory, $imgNewName;

    use HasFactory;

    public static function newBrand($request)
    {

        if ($request->brand_id) {
            self::$brand = Brand::find($request->brand_id);
        }
        else{
            self::$brand = new Brand();
        }
        self::$brand->brand_name = $request->brand_name;
        if ($request->file('image')) {
            if (self::$brand->image) {
                if (file_exists( self::$brand->image)) {
                    unlink(self::$brand->image);
                }
            }
            self::$brand->image = self::saveImage($request);
        }
        self::$brand->save();
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imgNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$drictory = "adminAsset/img/brandImage/";
        self::$imgUrl = self::$drictory.self::$imgNewName;
        self::$image->move(self::$drictory,self::$imgNewName);
        return self::$imgUrl;
    }
}
