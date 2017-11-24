<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_lImVH78s9GU8ALo34qOpMo9T",
  "publishable_key" => "pk_test_BnGeP7pWLmgwoaW4hP54wARh"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>