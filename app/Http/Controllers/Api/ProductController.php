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
            ->when($request->has('task'), function ($query) use ($request) {
                return $query->where('barcode', $request->get('task'))
                    ->orWhere('name','like',$request->get('task').'%');
            })->get();

        return response()->json(['data' => $products]);
    }
}
