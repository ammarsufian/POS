<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\orderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $customer = Cache::get('customer');

        $order = Order::create([
            'status' => 'pending',
            'customer_id' => $customer->id,
            'payment_method' => $request->get('payment_method')
        ]);
        $customerCart = Cart::where('customer_id', $customer->id)->first();

        $cart_items = $customerCart->items;
        $cart_items->map(function (CartItem $cartItem) use ($order) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'price' => $cartItem->price,
                'quantity' => $cartItem->quantity,
                'total' => $cartItem->price * $cartItem->quantity
            ]);

            $cartItem->product->update(['quantity' => $cartItem->product->quantity - $cartItem->quantity]);
        });

        CartItem::whereIn('id', $cart_items->pluck('id'))->delete();
        $customerCart->delete();
        Cache::forget('customer');

        return response()->json([
            'success' => true,
            'data' => $order,
        ]);
    }
}
