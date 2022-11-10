<?php

namespace App\Http\Controllers\Personal\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
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

    public function store(ProductStoreRequest $request)
    {
//        $data = $request->validate(
//            [
//                'name' => 'required',
//                'description' => 'required',
//                'user_id' => 'required',
//            ]
//        );
        $data = $request->validated();

        Product::create($data);

        return redirect()->back();
    }

    public function edit(Product $product)
    {
        return view('personal.product.edit', compact('product'));
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
//        $data = $request->validate(
//            [
//                'name' => 'required',
//                'description' => 'required',
//            ]
//        );
        $data = $request->validated();

        $product->update($data);
        return redirect()->route('personal.product.index');

    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

}
