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
        if ($request->subcat_id){
            self::$subcategory = Subcategory::find($request->subcat_id);
        }else{
            self::$subcategory =new Subcategory();
        }

        self::$subcategory->category_id = $request->category_id;
        self::$subcategory->sub_category_name = $request->sub_category_name;
        self::$subcategory->save();
    }
    public static function status($id){
        self::$subcategory = Subcategory::find($id);
        if (self::$subcategory->status == 1){
            self::$subcategory->status =0;
        }
        else{
            self::$subcategory->status =1;
        }
        self::$subcategory->save();
    }

    public static function categoryDelete($request){
        self::$subcategory=Subcategory::find($request->cat_id);
        self::$subcategory->delete();
    }

}
