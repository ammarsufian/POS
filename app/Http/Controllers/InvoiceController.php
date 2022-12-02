<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function __invoke(Order $order)
    {
        return view('invoice')->with([
            'customer' => $order->customer,
            'order' => $order
        ]);
    }
}
