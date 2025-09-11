<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OneClickModalController extends Controller
{
    public function addProductOneClick(Request $request)
    {
        $product = json_decode(base64_decode($request->input(key: 'product')), true);
        session(['oneClickModalProduct' => $product]);
        session(['success' => false]);
        return redirect()->back();
    }
    public function removeProduct()
    {
        session(['oneClickModalProduct' => []]);
        return redirect()->back()->with('success');
    }


    public function orderProduct(Request $request)
    {

        $request->validate(
            [
                'username' => 'required|string',
                "phoneNumber" => 'required|regex:/^\+380\d{9}$/',
            ],
            [
                'username.required' => 'Ім’я обов’язкове',
                'phoneNumber.required' => 'Номер телефону обов’язковий',
                'phoneNumber.regex' => 'Неправильний формат телефону'
            ]
        );
        $data = [
            'userName' => $request->username,
            'phoneNumber' => $request->phoneNumber,
        ];
        session(['oneClickModalProduct' => null]);
        session(['success' => true]);
        return redirect()->back();
    }
}
