<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $products = new Product();
        $products->description=$request->description;
        $products->price=$request->price;
        $products->stock=$request->stock;
        $products->save();
    }

    public function show(string $id)
    {
        $products = Product::findOrFail($id);;
        return $products;
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request)
    {
        $products = Product::findOrFail($request->id);
        $products->description = $request->description;
        $products->price = $request->price;
        $products->stock=$request->stock;
        $products->save();
        return $products;
    }

    public function destroy(string $id)
    {
        $products = Product::destroy($id);
        return $products;
    }
}
