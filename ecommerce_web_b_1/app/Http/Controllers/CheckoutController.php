<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    public function index()
    {
       return view('frontEnd.checkout.checkout',[
           'cart_products' => Cart::getContent(),
       ]);
    }
}
