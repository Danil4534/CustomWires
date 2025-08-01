<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public $products = [
        ["img" => ["product.svg", "product.svg", "product.svg"], "name" => "Дріт монтажний 24AWG (0,2 мм2), 10 см, 1BLK02-2STT-10-2STT, чорний, PVC,  упаковка 100 шт", "price" => 0, 'popular' => true, 'inStock' => true, 'countInPackage' => 100, 'discount' => 35],
        ["img" => ["product.svg", "product.svg", "product.svg"], "name" => "Дріт монтажний 24AWG (0,2 мм2), 10 см, 1BLK02-2STT-10-2STT, чорний, PVC,  упаковка 100 шт", "price" => 0, 'popular' => true, 'inStock' => true, 'countInPackage' => 100, 'discount' => 10],
        ["img" => ["product.svg", "product.svg", "product.svg"], "name" => "Дріт монтажний 24AWG (0,2 мм2), 10 см, 1BLK02-2STT-10-2STT, чорний, PVC,  упаковка 100 шт", "price" => 0, 'popular' => true, 'inStock' => true, 'countInPackage' => 100, 'discount' => 10],
        ["img" => ["product.svg", "product.svg", "product.svg"], "name" => "Дріт монтажний 24AWG (0,2 мм2), 10 см, 1BLK02-2STT-10-2STT, чорний, PVC,  упаковка 100 шт", "price" => 0, 'popular' => true, 'inStock' => true, 'countInPackage' => 100, 'discount' => 10],
        ["img" => ["product.svg", "product.svg", "product.svg"], "name" => "Дріт монтажний 24AWG (0,2 мм2), 10 см, 1BLK02-2STT-10-2STT, чорний, PVC,  упаковка 100 шт", "price" => 0, 'popular' => true, 'inStock' => true, 'countInPackage' => 100, 'discount' => 10],
        ["img" => ["product.svg", "product.svg", "product.svg"], "name" => "Дріт монтажний 24AWG (0,2 мм2), 10 см, 1BLK02-2STT-10-2STT, чорний, PVC,  упаковка 100 шт", "price" => 0, 'popular' => true, 'inStock' => true, 'countInPackage' => 100, 'discount' => 10],
    ];
    public $cartProducts = [];

    public function getHomePage()
    {
        $products = $this->products;
        return view("pages.homePage", compact("products"));
    }
}
