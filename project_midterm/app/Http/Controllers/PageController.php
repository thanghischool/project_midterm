<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function getData()
    {
        $products = Product::all();
        return view('homepage', compact('products'));
    }

    public function getDetail($id)
    {

        $detail_product = Product::find($id);
        return view('detail')->with('detail_product', $detail_product);
    }

    public function search_product(Request $request)
    {
        $name = $request->input('name');
        $search_name = Product::where('name', 'LIKE', "%{$name}%")->get();
        return view('search_product', compact('search_name'));
    }  
}