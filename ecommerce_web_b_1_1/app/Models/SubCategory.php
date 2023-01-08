<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    private static $subCategory, $massage;

    public static function saveSubCategory($request)
    {
        if ($request->subcategory_id) {
            self::$subCategory = SubCategory::find($request->subcategory_id);
        }
        else{
            self::$subCategory = new SubCategory();
        }
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->sub_category_name = $request->sub_category_name;
        self::$subCategory->save();
    }
    public static function updateSubStatus($id)
    {
        self::$subCategory = SubCategory::find($id);
        if (self::$subCategory->status == 1)
        {
            self::$subCategory->status = 0;
            self::$massage = "Status Inactive Success";
        }
        else{
            self::$subCategory->status = 1;
            self::$massage = "Status Active Success";
        }
        self::$subCategory->save();
        return self::$massage;
    }

    public static function SubCategoryDelete($request)
    {
        self::$subCategory = SubCategory::find($request->cat_id);
        if (self::$subCategory->image) {
            if (file_exists(self::$subCategory->image)) {
                unlink(self::$subCategory->image);
            }
        }
        self::$subCategory->delete();
    }
}
