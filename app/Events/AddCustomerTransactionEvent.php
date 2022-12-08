<?php

namespace App\Events;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AddCustomerTransactionEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Order $order;
    public Customer $customer;
    public array $data;

    public function __construct(Order $order, Customer $customer, array $data)
    {
        $this->order = $order;
        $this->customer = $customer;
        $this->data = $data;
    }

}
