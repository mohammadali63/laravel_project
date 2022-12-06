<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;
    private static $newauthor;
    public static function saveNewAuthor($request)
    {
        self::$newauthor = new author();
        self::$newauthor->author_name = $request->author_name;
        self::$newauthor->save();

    }
    public static function updateNewAuthor($request)
    {
        self::$newauthor = author::find($request->author_id);
        self::$newauthor->author_name = $request->author_name;
        self::$newauthor->save();
    }
}
