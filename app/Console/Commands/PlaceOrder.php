<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use App\Jobs\ProcessOrder;

class PlaceOrder extends Command
{
    protected $signature = 'place-order {email : The user\'s email} {amount : The order amount}';

    protected $description = 'Simulate a user placing an order';

    public function handle()
    {
        $email = $this->argument('email');
        $amount = $this->argument('amount');

        // Create a new order
        $order = new Order([
            'user_email' => $email,
            'order_amount' => $amount,
            'status' => 'pending', //  initial status for the order
        ]);

        $order->save();
        ProcessOrder::dispatch($order);

        $this->info("Order placed successfully. User: $email, Order Amount: $amount");
    }
}
