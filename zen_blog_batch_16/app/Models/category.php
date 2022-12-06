<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    private static $category;
    public static function saveCategory($request){
        self::$category=new category();
        self::$category->category = $request->category;
        self::$category->save();
    }

}
