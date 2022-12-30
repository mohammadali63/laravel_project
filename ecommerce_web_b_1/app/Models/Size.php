<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    private static $size;
    public static function saveSize($request){
        if ($request->size_id){
            self::$size = Size::find($request->size_id);
        }else{
            self::$size =new Size();
        }
        self::$size->size_name = $request->size_name;

        self::$size->save();
    }
    public static function status($id){
        self::$size = Size::find($id);
        if (self::$size->status == 1){
            self::$size->status =0;
        }
        else{
            self::$size->status =1;
        }
        self::$size->save();
    }

    public static function sizeDelete($request){
        self::$size=Size::find($request->size_id);
        self::$size->delete();
    }
}
