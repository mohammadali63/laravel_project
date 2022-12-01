<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    private static $blog,$image,$newimage,$imageurl,$directory;

    public static function newBlog($request)
    {
        self::$blog=new blog();
        self::$blog->title = $request->title;
        self::$blog->category_id = $request->category_id;
        self::$blog->author = $request->author;
        self::$blog->description = $request->description;
        self::$blog->image = self::getImageUrl($request);
        self::$blog->status = $request->status;
        self::$blog->save();

    }
    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$newimage = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory ='asset/image/';
        self::$imageurl = self::$directory.self::$newimage;
        self::$image->move(self::$directory,self::$newimage);
        return self::$imageurl;
    }
}
