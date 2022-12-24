<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ControlPageController extends Controller
{
    public function index(Request $request)
    {
        return view('index')->with([
            'today_sales' => Order::where('created_at','>=',Carbon::now()->startOfDay())->withSum('items','total')->get()->sum('items_sum_total'),
            'today_cash_sales' => Order::where('created_at','>=',Carbon::now()->startOfDay())->withSum('items','total')->where('payment_method','cash')->get()->sum('items_sum_total'),
            'today_debit_sales' => Order::where('created_at','>=',Carbon::now()->startOfDay())->withSum('items','total')->where('payment_method','debit')->get()->sum('items_sum_total'),
            'low_stock_products' => Product::where('quantity','<',10)->take(5)->get(),
        ]);
    }
}
