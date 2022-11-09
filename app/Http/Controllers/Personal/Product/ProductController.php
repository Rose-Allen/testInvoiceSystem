<?php

namespace App\Http\Controllers\Personal\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('personal.product.index', compact('products'));
    }

    public function create()
    {
        $user = auth()->user()->id;
        return view('personal.product.create', compact('user'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'user_id' => 'required',
            ]
        );

        Product::create($data);

        return redirect()->back();
    }

    public function edit(Product $product)
    {
        return view('personal.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
            ]
        );

        $product->update($data);
        return redirect()->route('personal.product.index');

    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

}
