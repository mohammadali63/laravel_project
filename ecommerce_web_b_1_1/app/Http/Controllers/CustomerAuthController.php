<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;
    public function CustomerLogin()
    {
        return view('frontEnd.customer.auth');
    }
    public function CustomerLogout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect(route('home'));
    }
}
