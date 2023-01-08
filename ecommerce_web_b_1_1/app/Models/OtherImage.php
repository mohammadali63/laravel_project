<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;

    private static $otherImage,$image, $imgNewName, $directory, $imgUrl, $extension,$otherImages;


    private static  function getImgUrl($image)
    {
        self::$imgNewName   = rand(1000, 2000).'.'. $image ->getClientOriginalExtension();
        self::$directory    ='product-other-image/';
        $image->move(self::$directory ,self::$imgNewName);
        self::$imgUrl       = self::$directory .self::$imgNewName;
        return self::$imgUrl;
    }

    public static function newOtherImage($request, $id)
    {
        foreach ($request->other_image as $image)
        {
            self::$otherImage               = new OtherImage();
            self::$otherImage->product_id   = $id;
            self::$otherImage->image        = self::getImgUrl($image);
            self::$otherImage->save();
        }
    }

    public static function updateOtherImage($request,$id)
    {
        self::deleteOtherImage($id);
        self::newOtherImage($request,$id);
    }

    public static function deleteOtherImage($id)
    {
        self::$otherImages=OtherImage::where('product_id',$id)->get();
        foreach (self::$otherImages as $otherImage)
        {
            if (file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
    }
}
