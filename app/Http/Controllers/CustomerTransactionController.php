<?php

namespace App\Http\Controllers;

use App\Models\CustomerTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CustomerTransactionController extends Controller
{

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
