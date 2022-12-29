<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $category,$image,$imageNewName,$directory,$imgUrl;

    public static function Savebrand($request){
        if ($request->brand_id){
            self::$category = Brand::find($request->brand_id);
        }else{
            self::$category =new Brand();
        }
        self::$category->barand_name = $request->barand_name;
        if ($request->image){
            if (file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::$category->image = self::getImageUrl($request);
        }

        self::$category->save();
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
    public static function status($id){
        self::$category = Brand::find($id);
        if (self::$category->status == 1){
            self::$category->status =0;
        }
        else{
            self::$category->status =1;
        }
        self::$category->save();
    }

    public static function brandDelete($request){
        self::$category=Brand::find($request->brand_id);
        if (self::$category->image){
            if (file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
        }
        self::$category->delete();
    }
}
