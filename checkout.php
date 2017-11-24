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

  $prospect_first_name = $_POST['prospect_first_name'];
  $prospect_last_name = $_POST['prospect_last_name'];
  $prospect_email = $_POST['prospect_email'];
  $prospect_address = $_POST['prospect_address'];
  $prospect_zip = $_POST['prospect_zip'];
  $prospect_phone_number = $_POST['prospect_phone_number'];
  $prospect_city = $_POST['prospect_city'];

   $_SESSION['order_first_name'] = $prospect_first_name;
    $_SESSION['order_last_name'] = $prospect_last_name;
    $_SESSION['order_email'] = $prospect_email;
     $_SESSION['order_address'] = $prospect_address;
      $_SESSION['order_zip'] = $prospect_zip;
       $_SESSION['order_phone_number'] = $prospect_phone_number;
        $_SESSION['order_city'] = $prospect_city;

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
        
        <h1 data-tid="elements_examples.intro.title" class="common-SuperTitle">Stripe Demo - Checkout</h1>
        <p data-tid="elements_examples.intro.subtitle" class="common-IntroText">Page designed to take credit card information and send it to Stripe</p>
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
<p style="font-size:24px;">Checkout Form</p>
       <br>
       <? echo "<p>thanks, $prospect_first_name $prospect_last_name</p>"; ?>
       <? echo "<p>delivering to: $prospect_address, $prospect_city, $prospect_zip</p>"; ?>
       <? echo "<p>email sent to: $prospect_email</p>"; ?>
       <? echo "<p>text sent to: $prospect_phone_number</p>"; ?>

       <br>
         <form action="charge.php" method="POST" style="padding:20px;">
          
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_BnGeP7pWLmgwoaW4hP54wARh"
    data-amount="500"
    data-name="Buy Now!"
    data-description="secure payment gateway"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="nzd">
  </script>
</form>
        <div class="success">
          <div class="icon">
            <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle class="border" cx="42" cy="42" r="40" stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
              <path class="checkmark" stroke-linecap="round" stroke-linejoin="round" d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4" stroke="#000" fill="none"></path>
            </svg>
          </div>
          <h3 class="title" data-tid="elements_examples.success.title">Payment successful</h3>
          <p class="message"><span data-tid="elements_examples.success.message">Thanks for trying Stripe Elements. No money was charged, but we generated a token: </span><span class="token"></span></p>
          <a class="reset" href="#">
            <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="#000000" d="M15,7.05492878 C10.5000495,7.55237307 7,11.3674463 7,16 C7,20.9705627 11.0294373,25 16,25 C20.9705627,25 25,20.9705627 25,16 C25,15.3627484 24.4834055,14.8461538 23.8461538,14.8461538 C23.2089022,14.8461538 22.6923077,15.3627484 22.6923077,16 C22.6923077,19.6960595 19.6960595,22.6923077 16,22.6923077 C12.3039405,22.6923077 9.30769231,19.6960595 9.30769231,16 C9.30769231,12.3039405 12.3039405,9.30769231 16,9.30769231 L16,12.0841673 C16,12.1800431 16.0275652,12.2738974 16.0794108,12.354546 C16.2287368,12.5868311 16.5380938,12.6540826 16.7703788,12.5047565 L22.3457501,8.92058924 L22.3457501,8.92058924 C22.4060014,8.88185624 22.4572275,8.83063012 22.4959605,8.7703788 C22.6452866,8.53809377 22.5780351,8.22873685 22.3457501,8.07941076 L22.3457501,8.07941076 L16.7703788,4.49524351 C16.6897301,4.44339794 16.5958758,4.41583275 16.5,4.41583275 C16.2238576,4.41583275 16,4.63969037 16,4.91583275 L16,7 L15,7 L15,7.05492878 Z M16,32 C7.163444,32 0,24.836556 0,16 C0,7.163444 7.163444,0 16,0 C24.836556,0 32,7.163444 32,16 C32,24.836556 24.836556,32 16,32 Z"></path>
            </svg>
          </a>
        </div>

        
      </div>

      
    </main>
  </div>

  <!-- Simple localization script for Stripe's examples page. -->

  <!-- Scripts for each example: -->
  <script src="js/example1.js" data-rel-js></script>



</body>
</html>
