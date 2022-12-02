<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog,$image,$imageNewName,$directory,$imgurl;

//    public static function getAllBlog()
//    {
//        return[
//            0=>[
//                'id'           =>1,
//                'title'        =>'lorem title',
//                'category'     =>'lorem category',
//                'author'       =>'lorem author',
//                'description'  =>'lorem description',
//            ],
//            1=>[
//                'id'           =>2,
//                'title'        =>'lorem title one',
//                'category'     =>'lorem category',
//                'author'       =>'lorem author',
//                'description'  =>'lorem description',
//            ],
//            2=>[
//                'id'           =>3,
//                'title'        =>'lorem title two',
//                'category'     =>'lorem category',
//                'author'       =>'lorem author',
//                'description'  =>'lorem description',
//            ],
//            3=>['id'           =>4,
//                'title'        =>'lorem title three',
//                'category'     =>'lorem category',
//                'author'       =>'lorem author',
//                'description'  =>'lorem description',
//                ],
//        ];
//    }
    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->title = $request->title;
        self::$blog->category_id = $request->category_id;
        self::$blog->author = $request->author;
        self::$blog->description = $request->description;
        self::$blog->image = self::getImgUrl($request);
        self::$blog->status = $request->status;
        self::$blog->save();
    }

    private static function getImgUrl($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'asset/image/';
        self::$imgurl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgurl;
    }
    public static function updateBlog($request)
    {
        self::$blog = Blog::find($request->blog_id);
        self::$blog->title = $request->title;
        self::$blog->category_id = $request->category_id;
        self::$blog->author = $request->author;
        self::$blog->description = $request->description;
        if ($request->file('image'))
        {
            if (self::$blog->image)
            {
                unlink(self::$blog->image);
            }
            self::$blog->image = self::getImgUrl($request);
        }
        self::$blog->status = $request->status;
        self::$blog->save();

    }
}
