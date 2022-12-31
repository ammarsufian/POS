<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\CustomerTransaction;
use App\Models\CustomerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PosController extends Controller
{
    public function index(Request $request)
    {
        $cart = null;
        $customer = Cache::get('customer');
        $debit_attributes = [];

        if ($customer) {
            $cart = Cart::where('customer_id', $customer->id)->first();
            $debit_data =CustomerTransaction::where('customer_id', $customer->id)->where('status', 'pending')->where('payment_type', 'debit');
            $debit_attributes = [
                'debit_amount' => $debit_data ? $debit_data->sum('total') :0,
                'debits_history' => $debit_data->get() ?? null
            ];
        }

        return view('pos')->with(array_merge([
            'types' => CustomerType::get(),
            'active_customer' => $customer ?? null,
            'cart' => $cart ? (CartResource::make($cart))->resolve() : null,
            'customers_list' => Customer::whereHas('cart')->get(),
        ],$debit_attributes ));
    }
}
