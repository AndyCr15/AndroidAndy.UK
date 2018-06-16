<!DOCTYPE html>

<?php

//set cachine to hold for 7 days
header("Cache-Control: max-age=604800");


?>

    <html lang="en">

    <head>
        <title>AndroidAndyUK</title>
        <link rel=icon href=../favicon.png>
        <meta name="description" content='AndroidAndyUK is a UK based website focusing on Android mobile phones and gadgets through YouTube reviews, Apps and social media.'>

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

                <h6 class="newsdate">22nd February 2018</h6>
                <h2>Mobile Phone Gimbal</h2>
                <p class="newstext">I'm sure it comes as no surpsise that I enjoy making videos. Also, one of the main reasons I have a Pixel 2 XL as my main device is the camera on it, as this is often the main tool of my personal video creation.</p>
                <p class="newstext">One thing you generally want when creating video, is a nice smooth frame. The Pixel has fantastic video stabilisation, but nothing can compare to an actual gimbal, so when I saw this Zihyun Smooth-Q Gimbal for only £99, I thought I had to try it!</p>
                <p class="newstext">It has three modes, each one locking different axis -</p>
                <lu>
                    <li>Pan Following Mode - Moves with you left and right, but not up and down</li>
                    <li>Locking Mode - Both up and down and left and right will remain as they began, you move around them.</li>
                    <li>Following Mode - Will move with you, left and right as well as up and down.</li>
                </lu><br>
                <p class="newstext">Don't forget the massive 26,000mAh battery giving a quoted 12 hours of smooth recording or you can use it to keep you phone battery topped up, while in use!</p>
                <p class="newstext">All in all, it really is a capable little device, which copes just fine with a phone the size of the 2 XL. It's quite impressive how smooth it is, even as I jog along using it and well worth the money if you also love making videos.</p>
                <div class="youtube-player" data-id="_qEZVNfSuqw"></div>
                <p style="font-size:11px"><a href="https://www.youtube.com/watch?v=_qEZVNfSuqw">Click here to see my video revioew of the gimbal.</a></p>
            </div>

            <p class="newstext">It's a shame it's too hazy this morning for a decent photo. If the sun breaks through, I'll get back out there, but already I can see the snow is clearing up on the ground.</p>

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
