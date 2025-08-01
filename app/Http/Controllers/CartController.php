<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function addToCart(Request $request)
    {
        $product = json_decode(base64_decode($request->input("product")), true);
        $cartProducts = session()->get('chooseProducts', []);
        $cartProducts[] = $product;

        session(['chooseProducts' => $cartProducts]);
        return redirect()->back()->with('success', '');
    }
    public function removeFromCart(Request $request)
    {
        $index = $request->input('index');
        $cartProducts = session()->get('chooseProducts', []);
        unset($cartProducts[$index]);
        $cartProducts = array_values($cartProducts);
        session(['chooseProducts' => $cartProducts]);
        return redirect()->back()->with('success', '');
    }
}
