<?php
require "../vendor/autoload.php";

$product        = isset( $_POST['product'] ) ? filter_var( $_POST['product'], FILTER_SANITIZE_SPECIAL_CHARS ) : '';
$product_qnty   = isset( $_POST['quantity'] ) ? filter_var( $_POST['quantity'], FILTER_SANITIZE_SPECIAL_CHARS ) : 0;
$product_price  = isset( $_POST['price'] ) ? filter_var( $_POST['price'], FILTER_SANITIZE_SPECIAL_CHARS ) : 0;
$price_unit     = number_format( floatval( $product_price ), 2 ) * 100;
$product_name   = '';

if( 't-shirt' == $product ){
    $product_name = "Man's T-shirt";
}elseif( 'hoodie' == $product ){
    $product_name = "Man's Hoodie";
}

if( !$product || !$product_qnty || 0 === $product_qnty || $product_name  ){
    header("Location: ../index.php");
}

$stripe_secret_key = "your Stripe secret key here";
\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode"          => "payment",
    "success_url"   => "http://localhost/stripe-checkout-with-php/success.php",
    "cancel_url"    => "http://localhost/stripe-checkout-with-php/index.php",
    "locale"        => "auto",
    "line_items"    => [
        [
            "quantity"       =>  intval( $product_qnty ),
            "price_data"     => [
                "currency"      => "usd",
                "unit_amount"   => $price_unit ,
                "product_data"  => [
                    "name"      => $product_name
                ]
            ]
        ],      
    ]
]);

if( ! $checkout_session ){
    die('Invalid secret key!');
}

http_response_code(303);
header("Location: " . $checkout_session->url);