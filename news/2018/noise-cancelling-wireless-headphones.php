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

                <h6 class="newsdate">22nd May 2018</h6>
                <h2>Noise Cancelling Wireless Headphones</h2>
                <p>It all began about 6 months ago when my brother splurged on a pair of Bose QC 35 ii's for his hour plus commute to work.  Now, I remember hearing Bose noise cancellation before, a demo somewhere, sometime, but I don't remember it being as impressive as it was when I reviewed his Bose headphones.  I almost instantly ordered my own set.</p>
                <p>I then realised they weren't as perfect as I thought.  Playing games I noticed quite a delay in the sound, from firing a bullet to hearing it fired was around a third of a second.  It doesn't sound much but actually it's quite off putting.  Also, ask a gamer what he thinks of playing competitively with a 300+ ping!  So began my hunt for the perfect wireless noise cancelling headphones!</p>
                <img src="../../images/noise-cancelling-wireless-headphones.jpg" width="100%">
                <p>After some googling, I shelled out £330 on some Sony WH 1000Xm2 headphones.  Whilst not quite as comfortable as the Bose, their noise cancellation was just as good, if not better and due to the codecs they use, no audio lag! Great!</p>
                <p>Fast forward another 3 or 4 months and I thought 'I wonder if there's anything even better out there?'.  I decided to drop a few emails to some companies on the off chance they might let me try what they have to offer and to my great surprise, two of them replied!  Sennheiser sent me their PXC550 wireless noise cancelling headphones, which were in the same price bracket as the Bose and Sony.  They are a great set of headphones, but can't quite match the Sony or Bose in my opinion.</p>
                <div class="youtube-player" data-id="fDjpG2DHQ8w"></div>
                <p>Also, Plantronics said they'd love to send me their BackBeat Pro 2 headphones for me to review.  I was rather pleased about this as these were actually the headphones I was thinking to get before I heard my brothers Bose headphones.  They are almost half the price of the Sony's I use now, here was my chance to see if I'd wasted my money or not.</p>
                <div class="youtube-player" data-id="H_ge1Y1eJoU"></div>
                <p>You could argue if the extra £150 is worth the better noise cancellation that the Sony's give, but there's no denying they're a superior headphone.  That doesn't mean the Plantronics aren't great too though.  For the money you spend, they certainly tick a lot of boxes and will still be the best option for some people.</p>
                <p>Those are just my thoughts, I'd love to hear yours on the forum, <a href="http://androidandy.uk/phpbb/viewtopic.php?f=8&t=42">so come join the discussion</a>.</p>
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
