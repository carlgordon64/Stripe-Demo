<?php
require_once('Stripe/init.php');

   echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));
   echo $_POST["stripeToken"];

   // Set your secret key: remember to change this to your live secret key in production
   // See your keys here: https://dashboard.stripe.com/account/apikeys
   \Stripe\Stripe::setApiKey("sk_test_TDCv6kiSBg1dmwngEboyvDxV");

   // Token is created using Checkout or Elements!
   // Get the payment token ID submitted by the form:
   $token = $_POST['stripeToken'];

   // Charge the user's card:
   $charge = \Stripe\Charge::create(array(
     "amount" => 1000,
     "currency" => "nzd",
     "description" => "Example charge",
     "source" => $token,
   ));
?>
