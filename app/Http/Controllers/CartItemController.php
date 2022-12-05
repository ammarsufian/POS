<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CartItemController extends Controller
{
    public function store(Request $request)
    {
        try {
            $cart = $this->getCustomerCart();
            $product = Product::findOrFail($request->get('product_id'));
            if ($cart) {
                $cartItem = $cart->items()->where('product_id', $request->get('product_id'))->first();

                if ($cartItem)
                    $cartItem->update(['quantity' => $cartItem->quantity + $request->get('quantity')]);
                else
                    $cart->items()->create([
                        'product_id' => $request->get('product_id'),
                        'quantity' => $request->get('quantity'),
                        'price' => $request->get('price') > 0 ? $request->get('price') :  $product->price_value,
                    ]);
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }

        return redirect()->route('pos');
    }

    public function deleteItemById(Request $request)
    {
        $cart = $this->getCustomerCart();
        $cart->items()->where('id', $request->get('itemId'))->delete();

        return response()->json(['data' => ['success']]);
    }

    private function getCustomerCart()
    {
        $customer = Cache::get('customer');

        if ($customer)
            return $customer->cart()->firstOrCreate();
        return null;
    }
}
