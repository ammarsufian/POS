<?php

namespace App\Listeners;

use App\Events\AddCustomerTransactionEvent;
use App\Models\CustomerTransaction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddCustomerTransactionListener
{
    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(AddCustomerTransactionEvent $event)
    {
        $orderTotal = $event->order->items()->sum('total');

        if ($event->order->payment_method == 'cash') {
            CustomerTransaction::create([
                'customer_id' => $event->customer->id,
                'total' => $orderTotal,
                'status' => 'paid',
                'order_id' => $event->order->id,
            ]);
        } else {
            $cash_amount = $this->getCashAmount($orderTotal, $event);
            if ($cash_amount > 0) {
                CustomerTransaction::create([
                    'customer_id' => $event->customer->id,
                    'total' => $cash_amount,
                    'status' => 'paid',
                    'order_id' => $event->order->id,
                ]);
            }
            CustomerTransaction::create([
                'customer_id' => $event->customer->id,
                'total' => $event->data['debit_amount_label'],
                'status' => 'pending',
                'order_id' => $event->order->id,
                'payment_type' => 'debit'
            ]);

        }
    }

    protected function getCashAmount($orderTotal, $event)
    {
        return $orderTotal - $event->data['debit_amount_label'];
    }
}
