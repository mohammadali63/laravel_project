<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    private static $category;
    public static function saveCategory($request){
        $request->validate([
            'category' =>'required|string|min:3|max:20',
        ]);
        self::$category=new category();
        self::$category->category = $request->category;
        self::$category->save();
    }
    public static function updateCategories($request)
    {
        self::$category = category::find($request->category_id);
        self::$category->category = $request->category;
        self::$category->status = $request->status;
        self::$category->save();
    }

}
