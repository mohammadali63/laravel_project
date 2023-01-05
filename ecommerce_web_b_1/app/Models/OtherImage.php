<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;
    private static $otherImage,$otherImages,$image,$imageName,$directory,$imageUrl,$extention;
    private static function getImageUrl($image)
    {
        self::$extention = $image->getClientOriginalExtension();
        self::$imageName = rand(1000, 2000).'.'.self::$extention;
        self::$directory = 'product-other-images/';
        $image->move(self::$directory , self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newOtherImage($request, $id)
    {
        foreach ($request->other_image as $image)
        {
            self::$otherImage = new OtherImage();
            self::$otherImage->product_id   = $id;
            self::$otherImage->image        = self::getImageUrl($image);
            self::$otherImage->save();
        }

    }
    public static function updateOtherImage($request,$id)
    {
        self::deleteOtherImage();
        self::newOtherImage($request,$id);
    }
    public static function deleteOtherImage($id)
    {
        self::$otherImages =OtherImage::where('product_id',$id)->get();
        foreach (self::$otherImages as $otherimage)
        {
            if (file_exists($otherimage->image))
            {
                unlink($otherimage->image);
            }
            $otherimage->delete();
        }
    }
}
