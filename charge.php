<?
session_start(); 
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title data-tid="elements_examples.meta.title">Stripe_Demo</title>
  <meta data-tid="elements_examples.meta.description" name="description" content="Build beautiful, smart checkout flows.">

  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon/180x180.png">
  <link rel="icon" href="img/apple-touch-icon/180x180.png">

  <script src="https://js.stripe.com/v3/"></script>
  <script src="js/index.js" data-rel-js></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/base.css" data-rel-css="" />

  <!-- CSS for each example: -->
  <link rel="stylesheet" type="text/css" href="css/example1.css" data-rel-css="" />

  <?php 

  $order_first_name = $_SESSION['order_first_name'];
  $order_last_name = $_SESSION['order_last_name'];
  $order_email = $_SESSION['order_email'];
  $order_address = $_SESSION['order_address'];
  $order_zip = $_SESSION['order_zip'];
  $order_phone_number = $_SESSION['order_phone_number'];
  $order_city = $_SESSION['order_city'];

// echo "<p>first name = $order_first_name</p>";
// echo "<p>last name = $order_last_name</p>";

  ?>
</head>

<body>
  <style type="text/css">
.example1 p{
text-align:center; color:#fff; font-family:'Roboto',sans-serif; 
}
  </style>


  <div class="globalContent">
    <main>
    <div class="stripes">
      <div class="stripe s1"></div>
      <div class="stripe s2"></div>
      <div class="stripe s3"></div>
    </div>
    <section class="container-lg">
      <!--Intro-->
      <div class="cell intro">
        
        <h1 data-tid="elements_examples.intro.title" class="common-SuperTitle">Stripe Demo - Thank you page</h1>
        <p data-tid="elements_examples.intro.subtitle" class="common-IntroText">Page designed to display a reciept of purchase</p>
        <p class="common-ButtonGroup">
        <a data-tid="elements_examples.intro.button_learn_more" href="https://stripe.com/elements" class="common-Button common-Button--default">
          Github
        </a>
        <a data-tid="elements_examples.intro.button_docs" href="https://dashboard.stripe.com/test/customers" class="common-Button" ="elements_docs">
          Stripe
        </a>
      </div>

      <!--Example 1-->
      <div class="cell example example1">
        <?php require_once('config.php'); ?>
<p style="font-size:24px;">Reciept</p>
       <br>
       <? echo "<p>thanks, $order_first_name $order_last_name</p>"; ?>

       <? echo "<p>Your order has been placed successfully!</p>"; ?>

       <? echo "<p>delivering to: $order_address, $order_city, $order_zip</p>"; ?>
       <? echo "<p>email sent to: $order_email</p>"; ?>
       <? echo "<p>text sent to: $order_phone_number</p>"; ?>

       <br>

        
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

        
      </div>

      
    </main>
  </div>

  <!-- Simple localization script for Stripe's examples page. -->

  <!-- Scripts for each example: -->
  <script src="js/example1.js" data-rel-js></script>

<?
session_write_close();
?>

</body>
</html>
