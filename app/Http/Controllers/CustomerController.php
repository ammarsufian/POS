<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $customer = Customer::query()
            ->where('mobile_number', $request->get('mobile_number'))
            ->get();

        if ($customer) {
            Session::put('customer', $customer);
            return response()->json(['data' => $customer]);
        } else {
            return response()->json(['data' => []]);
        }

    }

    public function webIndex(Request $request)
    {
        $customers = Customer::query()->get();

       return view('customerlist')->with([
           'customers' => $customers
       ]);

    }
    public function store(Request $request)
    {
        $customer = Customer::create([
            "name" => $request->get('name'),
            "mobile_number" => $request->get('mobile_number') ??$request->get('name'),
            "city" => $request->get('city') ?? 'amman',
            "customer_type_id" => $request->get('customer-type')
        ]);

        Cache::put('customer', $customer);
        return redirect()->route('pos');
    }

    public function edit(Customer $customer)
    {
        return view('editcustomer')->with([
            'customer' => $customer
        ]);
    }
}
