<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::query()
            ->when($request->has('barcode'), function ($query) use ($request) {
                return $query->where('barcode', $request->get('barcode'));
            })->when($request->has('name'), function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->get('name') . '%');
            })
            ->get();

        return response()->json(['data' => $products]);
    }
    public function search(Request $request)
    {
        $products = Product::query()->where('name', 'like', '%' . $request->get('name') . '%')->limit(5)->get();

        return response()->json(['data' => $products]);
    }
    public function show(Product $product)
    {
        return response()->json(['data' => $product]);
    }
}
