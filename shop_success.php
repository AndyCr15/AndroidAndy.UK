<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

session_start();

?>

    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/aauk.css">
    </head>

    <body>
        <form action="http://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">

            <?php
                include 'header.php';
            ?>

                <div id="bodymain" class="container">

                    <?php
                    if($_SESSION['paid'] == "1"){
                ?>

                        <h2 style="margin-top:0px">Order Successful</h2>
                        <hr>
                        <?php 

                        include 'cart.php';

                        confirmOrder();
                            echo ('<hr>');

                    ?>
                        <p>Thank you for your order. I will usually post your order out within 2 working days to the address given in the Paypal payment. Please <a href="contact.php">contact me</a> if you need to check your order status.</p>
                        <?php
                        session_destroy();
                    } else {
                        echo '<h2 style="margin-top:0px">Payment Not Completed</h2>';
                        echo '<p>Go <a href="shop.php">Back To Shop</a></p>';
                    }
                ?>
                </div>
        </form>
    </body>
