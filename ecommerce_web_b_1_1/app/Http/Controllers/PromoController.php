<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public $promo;
    public function index()
    {
        return view('admin.promo.promoform');
    }

    public function savePromo(Request $request)
    {
        $this->promo = new Promo();
        $this->promo->icontag = $request->icontag;
        $this->promo->text = $request->text;
        $this->promo->save();
        return back()->with('massage','New Promo create Success');
    }
}
