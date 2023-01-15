<?php

namespace App\Http\Controllers;

use App\Models\balance;
use App\Models\Customer;
use App\Models\CustomerTransaction;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomerTransactionController extends Controller
{

    public function index(Customer $customer,Request $request)
    {
       $customer_transactions = CustomerTransaction::where('customer_id',$customer->id);
        $balance = balance::where('customer_id',$customer->id)->first();
       $transactions = [
           'cash_customer_transactions' =>  $balance->cash ?? 0,
           'debit_transactions' =>  $balance->debit ?? 0,
       ];

       return view('customer-finanical-transactions')->with([
           'customer' => $customer,
           'customer_transactions' => $customer_transactions->orderBy('created_at','desc')->get(),
           'transactions' => $transactions
       ]);
    }

    public function payDebitInvoice(Customer $customer,Request $request)
    {
        $transaction = CustomerTransaction::create([
            'customer_id' => $customer->id,
            'total' => $request->get('payment_amount'),
            'payment_type'=> 'cash',
            'order_id' => Order::where('customer_id', $customer->id)->orderBy('created_at','desc')->first()->id,
            'is_pay_on_debit_account' => 1
        ]);

        return response()->json([
            'message' => 'success',
            'transaction' => $transaction
        ]);
    }

    public function printIncomeInvoice(CustomerTransaction $transaction)
    {
        return view('income-invoice')->with([
            'transaction' => $transaction,
            'customer' => $transaction->customer
        ]);
    }
}
