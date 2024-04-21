<?php
require "../vendor/autoload.php";

//$stripe_secret_key = "your Stripe secret key here";
$stripe_secret_key = "sk_test_51P7iuLSIOu5YRmW5L2JIINvREuUswg5U36kNvjBs2egFGE4rA4qK5S4aR5AfU9kHCg0X67Xqt5Z4kElOVKoF2qM300y11Wuzjz";
\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode"          => "payment",
    "success_url"   => "http://localhost/stripe-checkout-with-php/includes/success.php",
    "cancel_url"    => "http://localhost/stripe-checkout-with-php/index.php",
    "locale"        => "auto",
    "line_items"    => [
        [
            "quantity"          => 2,
            "price_data"        => [
                "currency"      => "usd",
                "unit_amount"   => 2000,
                "product_data"  => [
                    "name"      => "T-shirt"
                ]
            ]
        ],      
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);