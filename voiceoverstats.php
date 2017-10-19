<!DOCTYPE html>

<html lang="en">

<head>
    <link rel=icon href=favicon.png>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/aauk.css">
    <script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
    <script language="javascript" type="text/javascript" src="js/voiceover.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <title>voiceOver Stats</title>
</head>

<body>
    <form action="http://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">
        <nav class="navbar navbar-fixed-top navbar-dark" style="background-color:#74AAD3">
            <a class="navbar-brand" href="index.php">AAUK</a>
            <ul class="nav navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="youtube.php">YouTube</a> </li>
                <li class="nav-item"> <a class="nav-link" href="android.php">Android Apps</a> </li>
                <li class="nav-item"> <a class="nav-link" href="about.php">About Me</a> </li>
                <li class="nav-item"> <a class="nav-link" href="support.php">Support Me</a> </li>
                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact Me</a> </li>
            </ul>
        </nav>

        <div id="bodymain" class="container" style="padding:0px">
            <div class="col-md-6 col-sm-4">
                <div id="freqlist" style="width: 100%; margin: 0 auto"></div>
            </div>
            <div class="col-md-6 col-sm-4">
                <div style="margin: 20px">
                    <p>These stats are taken from the use of my <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.voiceover">Android sound board app for Overwatch.
                <img src="images/voiceover.png" alt="..." align="middle"></a></p>
                    <p>Watch them update in real time as you press a character to hear their soundbite.</p>
                </div>
            </div>
        </div>

        <?php include 'counter.php'; ?>

        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-105372126-1', 'auto');
            ga('send', 'pageview');

        </script>
        <script>
            $(function() {
                $('img').on('click', function() {
                    $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
                    $('#enlargeImageModal').modal('show');
                });
            });

        </script>
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
        <script src="//inc.freefind.com/inc/ffse-overlay.min.js" async></script>
</body>

</html>
