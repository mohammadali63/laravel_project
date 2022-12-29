<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    private static $subcategory,$massage;
    public static function saveSubCategory($request)
    {
        self::$subcategory =new Subcategory();
        self::$subcategory->category_id = $request->category_id;
        self::$subcategory->sub_category_name = $request->sub_category_name;
        self::$subcategory->save();
    }
}
