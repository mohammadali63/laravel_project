<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand,$image,$imageNewName,$directory,$imgUrl;

    public static function Savebrand($request){
        if ($request->brand_id){
            self::$brand = Brand::find($request->brand_id);
        }else{
            self::$brand =new Brand();
        }
        self::$brand->barand_name = $request->barand_name;
        if ($request->image){
            if (file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
            self::$brand->image = self::getImageUrl($request);
        }

        self::$brand->save();
    }
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName =rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory ='adminAsset/brand-image/';
        self::$imgUrl =self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;
    }
    public static function BrandStatus($id)
    {
        self::$brand = Brand::find($id);
        if (self::$brand->status == 1)
        {
            self::$brand->status =0;
        }
        else
        {
            self::$brand->status =1;
        }
        self::$brand->save();
    }


    public static function brandDelete($request){
        self::$brand=Brand::find($request->brand_id);
        if (self::$brand->image){
            if (file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
        }
        self::$brand->delete();
    }
}
