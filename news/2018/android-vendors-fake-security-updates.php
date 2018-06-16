<!DOCTYPE html>

<?php

//set cachine to hold for 7 days
header("Cache-Control: max-age=604800");


?>

    <html lang="en">

    <head>
        <title>AndroidAndyUK - Android Vendors Fake Security Updates</title>
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

                <h6 class="newsdate">19th April 2018</h6>
                <h2>Android Vendors Fake Security Updates</h2>
                <p>At a recent '<a href="http://www.hitb.org/">Hack in the Box</a>' security conference in Amsterdam, two researchers called Karsten Nohl and Jakob Lell of the firm Security Research Labs revealed the results of a two year long investigation into Android security patches by vendors.  In their study, they examined the firmware of 1,200 Android devices, to see if the patch level quoted in the OS was actually the patch level found on the device for patches released in 2017.  They found what they call a 'patch gap' in many of the well known OEM's devices.</p>
                <img src="../../images/security-update.jpg" width="100%">
                <p>SRL believed that some of their findings were simply down to a mistake by the vendor.  Others, rather worryingly, seemed to be an attempt by a vendor to let the user believe they'd patched to the most recent security patch, but infact all they did was change the patch date forward 'several months'! SRL have then catagorized the OEMs in this grid based on missed patches -</p>
                <table class="table">
                    <thead class="thead-dark table-striped">
                        <tr>
                            <th align="left">0-1</th>
                            <th align="left">1-3</th>
                            <th align="left">3-4</th>
                            <th align="left">4+</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Google</td>
                            <td>Xiaomi</td>
                            <td>HTC</td>
                            <td>TCL</td>
                        </tr>
                        <tr>
                            <td>Sony</td>
                            <td>OnePlus</td>
                            <td>Huawei</td>
                            <td>ZTE</td>
                        </tr>
                        <tr>
                            <td>Samsung</td>
                            <td>Nokia25</td>
                            <td>LG</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Wiko</td>
                            <td></td>
                            <td>Motorola</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <p>Apparently Google's own Pixel phones were the only ones to have every single patch, as they should...  which is actually a little worrying!  (Well, not for me as a Pixel 2 XL ownder, but in general).</p>
                <p>They went on to point out the chipset seemed to be a factor, with Samsung, Qualcomm and Hisilicon all missing less than 2% of patches, but Mediatek based devices missed almost 10% of them.</p>
                <p>You can check what level your own phone is on by installing SRL's own app, <a href="https://play.google.com/store/apps/details?id=de.srlabs.snoopsnitch&hl=en">SnoopSnitch</a>. <a href="http://androidandy.uk/phpbb/viewtopic.php?f=2&t=22">Head to the forum</a> to tell us how your device does.</p>
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
