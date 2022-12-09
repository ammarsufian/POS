<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\CustomerTransaction;
use App\Models\CustomerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class PosController extends Controller
{
    public function index(Request $request)
    {
        $cart = null;
        $customer = Cache::get('customer');

        if ($customer) {
            $cart = Cart::where('customer_id', $customer->id)->first();
        }

        return view('pos')->with([
            'types' => CustomerType::get(),
            'active_customer' => $customer ?? null,
            'cart' => $cart ? (CartResource::make($cart))->resolve() : null,
            'customers_list' => Customer::whereHas('cart')->get(),
            'debit_amount' => CustomerTransaction::where('customer_id', $customer->id)->where('status', 'pending')->sum('total')
        ]);
    }
}
