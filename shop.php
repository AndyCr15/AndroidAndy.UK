<?php 
include 'cart.php';

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

session_start();

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>AndroidAndyUK - Shop</title>
    <?php
            include 'header.php';
        ?>
</head>

<body>

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <?php
        $_SESSION['paid'] = 0;
            include 'navbar.php';
        ?>
        <div class="container" style="margin-top:70px">
            <?php 
                    cart();
                    $_SESSION['ipAddress'] = getRealIpAddr();
                    $xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$_SESSION['ipAddress']);
                    $xml = $xml->geoplugin_countryCode;        
                    if ($xml!='GB'){
                        echo 'Sorry, I don\'t ship to '.$xml.'.';
                    } else if ($_SESSION['toPay'] > 0){
                        echo '<div id="paypal-button-container" class="col-md-6 col-sm-4"></div>';
                        echo '<form action="cart.php" method="post" class="col-md-6 col-sm-4">';
                        echo 'Discount Code : <input type="discount" name="discount">';
                        echo '<input type="submit" name="Apply" value="Apply">';
                        echo '</form>';
                    }
                    echo '<hr>';
                    products(); 
                ?>
        </div>

        <script>
            paypal.Button.render({

                env: 'production', // sandbox | production

                // Specify the style of the button

                style: {
                    label: 'checkout',
                    size: 'small', // small | medium | large | responsive
                    shape: 'pill', // pill | rect
                    color: 'gold' // gold | blue | silver | black
                },

                // PayPal Client IDs - replace with your own
                // Create a PayPal app: https://developer.paypal.com/developer/applications/create
                client: {
                    sandbox: 'AUbmPNC-HX_Owp3qMKAufXgkoiiUpieaFH4Bpd8ksMim9CRG69J9Bwy_XiqxW_9iWWgDFqKDPzh3sMzB',
                    production: 'AV7uG8CdPI-nGhe8DGqcrTmkFv72w5Vj6IbSbSemiKlBmZKtAFv6OoBehBtc962ITFmVK__Pc26dgN_U'
                },

                // Show the buyer a 'Pay Now' button in the checkout flow
                commit: true,

                // payment() is called when the button is clicked
                payment: function(data, actions) {

                    // Make a call to the REST api to create the payment
                    return actions.payment.create({
                        payment: {
                            transactions: [{
                                amount: {
                                    total: <?php echo "'".$_SESSION['toPay']."'"; ?>,
                                    currency: 'GBP'
                                }
                            }]
                        }
                    });
                },

                // onAuthorize() is called when the buyer approves the payment
                onAuthorize: function(data, actions) {
                    // Make a call to the REST api to execute the payment
                    return actions.payment.execute().then(function() {
                        //$.post("shop_success.php", {
                        //   paid: 1
                        //});
                        window.location.href = "shop_success.php";
                    });
                }
            }, '#paypal-button-container');

        </script>
        <?php
            include 'footer.php';
        ?>
</body>

</html>
