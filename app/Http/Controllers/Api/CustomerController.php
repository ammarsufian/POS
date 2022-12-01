<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{

    public function store(Request $request)
    {
        $customer = Customer::create([
            'name' => $request->get('name'),
            'mobile_number' => $request->get('mobile_number'),
            'city' => $request->get('city'),
            'customer_type_id' => $request->get('customer_type_id') ?? 1,
        ]);

        return response()->json([
            'data' => $customer,
            'message' => 'Customer account is created successfully'
        ]);
    }

    public function index(Request $request)
    {
        $customer = Customer::query()
            ->when($request->has('mobile_number'), function ($query) use ($request) {
                return $query->where('mobile_number', $request->get('mobile_number'));
            })
            ->get();

        if ($customer) {
            Cache::put('customer', $customer->first());
        }

        return response()->json(['data' => $customer ?? []]);
    }

    public function activeCustomer(Request $request)
    {

        $customer = Customer::find($request->get('customerId'));

        Cache::put('customer', $customer);


        return response()->json([
            'data' => $request->get('customerId'),
        ]);
    }
}


