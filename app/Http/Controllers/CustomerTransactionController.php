<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CustomerTransactionController extends Controller
{

    public function index(Customer $customer,Request $request)
    {
       $customer_transactions = CustomerTransaction::where('customer_id',$customer->id);

       $transactions = [
           'cash_customer_transactions' =>  CustomerTransaction::where('customer_id',$customer->id)->where('payment_type','cash')->get()->sum('total'),
           'debit_transactions' =>  CustomerTransaction::where('customer_id',$customer->id)->where('payment_type','debit')->get()->sum('total'),
       ];

       return view('customer-finanical-transactions')->with([
           'customer' => $customer,
           'customer_transactions' => $customer_transactions->get(),
           'transactions' => $transactions
       ]);
    }

    public function payDebitInvoice(Request $request)
    {
        $invoiceId = $request->get('invoice_id');
        $customer = Cache::get('customer');

        CustomerTransaction::where('customer_id',$customer->id)
            ->where('id',$invoiceId)
            ->where('status','pending')->update(['status' => 'paid']);

        return response()->json(['success' => true]);

    }
}
