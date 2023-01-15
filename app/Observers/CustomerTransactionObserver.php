<?php

namespace App\Observers;

use App\Models\balance;
use App\Models\CustomerTransaction;

class CustomerTransactionObserver
{
    public function saving(CustomerTransaction $customerTransaction)
    {
        $balance = balance::where('customer_id', $customerTransaction->customer_id)->first();

        if (!$balance)
            $balance = $this->initalize($customerTransaction->customer_id);

        if ($customerTransaction->is_pay_on_debit_account) {
            $balance->update([
                'cash' => $balance->cash + $customerTransaction->total,
                'debit' => $balance->debit - $customerTransaction->total
            ]);
        }

        if ($customerTransaction->payment_type === 'cash') {
            $balance->update(['cash' => $balance->cash + $customerTransaction->total]);
        } else {
            $balance->update(['debit' => $balance->debit + $customerTransaction->total]);
        }

    }

    private function initalize(int $customerId)
    {
        return balance::create([
            'customer_id' => $customerId,
            'debit' => 0,
            'cash' => 0
        ]);
    }

}
