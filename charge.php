<?php
  require_once('config.php');

  $token  = $_POST['stripeToken'];
  $name  = "Test_user";
  $price= 500;
  

  $customer = \Stripe\Customer::create(array(
      'email' => $name,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $price,
      'currency' => 'nzd',
      'description' => 'testing payment form'
  ));

  echo "<h1>Successfully charged $5.00</h1>";
?>