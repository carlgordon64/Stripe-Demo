<?php
  require_once('config.php');

  $token  = $_POST['stripeToken'];
  $name  = $_POST['1735b430-d0ab-11e7-a2dd-3782168b0c2f'];

  

  $customer = \Stripe\Customer::create(array(
      'email' => $name,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 500,
      'currency' => 'nzd'
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>