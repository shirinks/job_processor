<p>Thank you for your order!</p>

<p>Order Details:</p>
<ul>
    <li>User Email: {{ $order->user_email }}</li>
    <li>Order Amount: ${{ $order->order_amount }}</li>
    <li>Order Status: {{ $order->status }}</li>
</ul>

<p>We are processing your order. You will receive further updates soon.</p>

<p>Thank you for choosing our service!</p>