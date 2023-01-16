<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBordController extends Controller
{
   public function dashboard()
   {
       return view('admin.home.home');
   }
}
