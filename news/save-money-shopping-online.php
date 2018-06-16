<!DOCTYPE html>

<?php

//set cachine to hold for 7 days
header("Cache-Control: max-age=604800");


?>

    <html lang="en">

    <head>
        <title>AndroidAndyUK</title>
        <link rel=icon href=../favicon.png>
        <meta name="description" content='AndroidAndyUK is a UK based website focusing on Android mobile phones and gadgets through YouTube reviews, Apps and social media. See how you can save money shopping online very easily.'>

        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="../images/logo.png">

        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="images/logo.png">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/aauk.css">

        <link rel="stylesheet" href="../css/lightbox.min.css">

        <link rel="manifest" href="../manifest.json">
    </head>

    <body id="page">

        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color:#74AAD3">
            <a class="navbar-brand" href="../index.php">AAUK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../youtube.php">YouTube</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../android.php">Android</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../podcasts.php">Podcasts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../support.php">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://androidandy.uk/phpbb/">Forum</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="bodymain" class="container" style="padding:0px">

            <div class="container">

                <h6 class="newsdate">15th April 2018</h6>
                <h2>Save Money Shopping Online</h2>
                <p>Everyone loves saving money when shopping online, right?  So I've got some of my best tips that could save you hundreds of pounds every year.  If you're reading this on your phone, sorry, most of these tips are for when shopping on your PC.</p>
                <p>My video will take you through the following tips for saving money when shopping online -</p>
                <lu>
                    <li><a href="https://www.quidco.com/user/235776/2729922/">Quidco</a> - get money back when shopping.  Use <a href="https://www.quidco.com/user/235776/2729922/">my referral link</a> to get £5 for just signing up!</li>
                    <li><a href="https://chrome.google.com/webstore/detail/keepa-amazon-price-tracke/neebplgakaahbhdphmkckjjcegoiijjo?hl=en">Keepa</a> - Google Chrome Browser plugin, shows you the price history of items on Amazon so you can see if it really is a deal or not.</li>
                    <li><a href="https://chrome.google.com/webstore/detail/honey/bmnlcjabgnpnenekpadlanbbkooimhnj">Honey</a> - Google Chrome Browser plugin, tries all known coupon codes for you at checkout. Please use <a href="joinhoney.com/ref/5fbmbpp">this link</a> to sign up though.</li>
                    <li><a href="https://chrome.google.com/webstore/detail/amazon-assistant-for-chro/pbjikboenpfhbbejgkoklgkhjpfogcam?hl=en">Amazon Assistent</a> - Another Chrome Browser plugin which will notify you if the item you're looking at can be bought cheaper on Amazon.</li>
                    <li><a href="https://www.hotukdeals.com/">Hot UK Deals</a> - A fantastic website for deals and bargains. I would recommend checking on here every few days, although it will likely make you spend more than you intended.</li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.google.android.apps.paidtasks">Google Rewards</a> - An Android App from Google that will ask you some questions about places you've been or even ask you to watch a video and ask you about it after and then pay you for doing so. The money can be spent on the Google Play Store.</li>
                </lu><br>
                <p>Over the years I think I've saved literally hundreds of pounds for very little effort.</p>
                <div class="youtube-player" data-id="A3m1GCaStrk"></div>
                <p style="font-size:11px"><a href="https://youtu.be/A3m1GCaStrk">Click here to see the video.</a></p>
            </div>
        </div>


        <?php include '../footer.php'; ?>

        <script>
            /* Light YouTube Embeds by @labnol */
            /* Web: http://labnol.org/?p=27941 */

            document.addEventListener("DOMContentLoaded",
                function() {
                    var div, n,
                        v = document.getElementsByClassName("youtube-player");
                    for (n = 0; n < v.length; n++) {
                        div = document.createElement("div");
                        div.setAttribute("data-id", v[n].dataset.id);
                        div.innerHTML = labnolThumb(v[n].dataset.id);
                        div.onclick = labnolIframe;
                        v[n].appendChild(div);
                    }
                });

            function labnolThumb(id) {
                var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
                    play = '<div class="play"></div>';
                return thumb.replace("ID", id) + play;
            }

            function labnolIframe() {
                var iframe = document.createElement("iframe");
                var embed = "https://www.youtube.com/embed/ID?autoplay=1";
                iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("allowfullscreen", "1");
                this.parentNode.replaceChild(iframe, this);
            }

        </script>

        <script src="../js/lightbox-plus-jquery.min.js" async></script>
    </body>

    </html>
