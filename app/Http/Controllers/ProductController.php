<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->get('name'),
            'barcode' => $request->get('barcode'),
            'quantity' => $request->get('quantity') ?? 0,
            'price' => $request->get('price'),
            'wholesale_price' => $request->get('wholesale_price') ?? 0,
            'traders_price' => $request->get('traders_price') ??0,
            'status' => $request->get('status', 'available') ?? 'available',
            'cost_price' => $request->get('cost_price') ??0,
        ]);

        return redirect()->intended('addproduct')
            ->withSuccess('تم إضافة المنتج بنجاح');
    }

    public function index(Request $request)
    {
        $products = Product::query()->get();

        return view('productlist')->with([
            'products' => $products,
        ]);
    }

    public function show(Product $product)
    {
        return view('product-details')->with([
            'product' => $product,
        ]);
    }

    public function edit(Product $product)
    {
        return view('editproduct')->with([
            'product' => $product,
        ]);
    }

    public function update(Product $product, Request $request)
    {
        $product->update([
            'name' => $request->get('name'),
            'barcode' => $request->get('barcode'),
            'quantity' => $request->get('quantity'),
            'price' => $request->get('price'),
            'wholesale_price' => $request->get('wholesale_price'),
            'traders_price' => $request->get('traders_price'),
            'status' => $request->get('status'),
            'cost_price' => $request->get('cost_price',$product->cost_price),
//            'expire_datetime' => $request->get('expiry_date')
        ]);

        return redirect()->intended('productlist')
            ->withSuccess('تم إضافة المنتج بنجاح');
    }
}
