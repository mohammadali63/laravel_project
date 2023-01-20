<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubsCribeController extends Controller
{
    public $subuscribe;
    public function SaveSubscribe(Request $request)
    {
        $this->subuscribe = new Subscribe();
        $this->subuscribe->	subsemail = $request->	subsemail;
        $this->subuscribe->save();
        return back();
    }
}
