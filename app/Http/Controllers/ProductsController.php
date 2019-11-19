<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('shop.Index', ['products' => $products]);
    }
}
