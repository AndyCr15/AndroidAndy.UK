<!DOCTYPE html>

<?php

//set cachine to hold for 7 days
header("Cache-Control: max-age=604800");


?>

    <html lang="en">

    <head>
        <title>AndroidAndyUK - Xiaomi are coming to the UK</title>
        <link rel=icon href=../favicon.png>
        <meta name="description" content='AndroidAndyUK is a UK based website focusing on Android mobile phones and gadgets through YouTube reviews, Apps and social media. Read about android OEMs faking security updateds on their Android phones.'>

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

        <link rel="stylesheet" type="text/css" href="../../css/aauk.css">

        <link rel="stylesheet" href="../../css/lightbox.min.css">

        <link rel="manifest" href="../../manifest.json">
    </head>

    <body id="page">

        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color:#74AAD3">
            <a class="navbar-brand" href="../../index.php">AAUK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                        <a class="nav-link" href="../../youtube.php">YouTube</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../android.php">Android</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../podcasts.php">Podcasts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../support.php">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../phpbb/">Forum</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="bodymain" class="container" style="padding:0px">

            <div class="container">

                <h6 class="newsdate">4th May 2018</h6>
                <h2>Xiaomi are coming to the UK</h2>
                <p>Many people in the UK have never heard of Xiaomi, but they're actually the worlds 5th largest smartphone company with revenue of $15 billion in 2017.  They aren't just limited to smartphones either, my pedometer is a Xiaomi product for example.  They make drones, TV's, laptops and air purifiers to name just a few other products.</p>
                <img src="../../images/redmi5plus.jpg" width="100%">
                <p>If you watched my <a href="https://www.youtube.com/watch?v=H2T1rpc6VB0">Redmi 5 Plus review</a> from last week, you'll already know that buying Xiaomi devices over here in the UK is a slow process, taking weeks and including a income tax Russian Roulette element when receiving the device.  Maybe soon that will all change though.</p>
                <p>Xiaomi have apparently struck a deal with CK Hutchison, a Hong Kong based conglomerate who have in their stable Three and Superdrug.</p>
                <p>Three UK's chief digital officer Tom Malleschitz is quoted as saying -</p>
                <p width="80%"><i>"We have been watching Xiaomi's success from afar and are impressed with the huge range of connected devices that they currently offer. This partnership provides us with another leading brand in our smartphone range and also opens the door for innovative new connected products that we can provide to Three customers in the future. So watch this space!"</i></p>
                <p>At this point it isn't know when Xiaomi producst will surface over here in the UK, Three just say they are 'Coming Soon'.  We also don't know how easily they will be bought SIM free, or even how much markup Three are likely to be putting on them.  It could well turn out it's still better to buy them from China, but fingers crossed Three will give us some great budget options at great prices!</p>
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
