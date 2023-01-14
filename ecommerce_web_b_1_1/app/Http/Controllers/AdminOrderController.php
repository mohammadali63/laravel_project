<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public  function manage()
    {
        return view('admin.order.manage',['orders' => Oder::orderBy('id', 'desc')->get()]);
    }
    public function Orderdetail($id)
    {
        return view('admin.order.detail',[
            'order'=> Oder::find($id)
        ]);
    }

    public function Invoice($id)
    {

    }

    public function delete($id)
    {

    }
}
