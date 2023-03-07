<?php
    
    require_once 'vendor/autoload.php';
    require_once 'vendor/stripe/stripe-php/init.php';
    

    $stripeDetails = array(
        "secretKey" => "sk_test_51MgKgDSH25YiwCLhIy0WPPYYL7i5rsNsoaHvsczEkSvPdfBHa5dxH1qfagExhjf8Sln0s7B5V8AHKEYsC0XWWtcC00yHHVIpFf",
        "publishableKey" => "pk_test_51MgKgDSH25YiwCLh52VoY335K9dXrbMHAtOeXBFJWMEUIFuQuXBqxlmwsME2QhQF3JB8C28WN02cih8yOonRTIwH00Ltjc9rU2"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>