<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OneClickModalController extends Controller
{
    public function addProduct(Request $request)
    {
        if ($request->input('action') === "oneClickOrder") {
            $product = json_decode(base64_decode($request->input('product')), true);
            session(['oneClickModalProduct' => $product]);
            return redirect()->back()->with('oneClickOrder', true);
        }
    }
    public function removeProduct()
    {
        session(['oneClickModalProduct' => []]);
        return redirect()->back()->with('success');
    }
}
