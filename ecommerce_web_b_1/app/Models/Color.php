<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    private static $color;
    public static function saveColor($request){
        if ($request->size_id){
            self::$color = Color::find($request->size_id);
        }else{
            self::$color =new Color();
        }
        self::$color->color_name = $request->color_name;
        self::$color->color_code = $request->color_code;

        self::$color->save();
    }

}
