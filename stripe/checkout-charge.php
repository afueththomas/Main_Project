<?php
    include("./config.php");
    include("dbConnect.php");
    session_start();
    $amount=$_SESSION["amount"];
    $cid=$_SESSION["cus_id"];

    $token = $_POST["stripeToken"];
    $contact_name = $_POST["c_name"];
    $token_card_type = $_POST["stripeTokenType"];
    $phone           = $_POST["phone"];
    $email           = $_POST["stripeEmail"];
    $address         = $_POST["address"];
    $charge = \Stripe\Charge::create([
      "amount" => str_replace(",","",$amount) * 100,
      "currency" => 'usd',
      "source"=> $token,
    ]);

    if($charge){
      header("Location:success.php?amount=$amount");
    }
?>