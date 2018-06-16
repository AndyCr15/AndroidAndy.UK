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

                <h6 class="newsdate">31st March 2018</h6>
                <h2>Passwords and Online Security</h2>
                <p>Until last year I hadn't really thought about passwords, how they're stored online and what are the best ones to pick are, but then I needed to code them into my website. I thought it was interesting enough to share with everyone, to hopefully help keep people safer online.</p>
                <p>There are really 4 ways you can be compramised (I missed one in the video below)</p>
                <lu>
                    <li>Phishing attack</li>
                    <li>Social engineering/too easy to guess password</li>
                    <li>Brute force attack</li>
                    <li>Website hacked</li>
                </lu>
                <hr>
                <Strong>Phishing Attack</Strong>
                <p>This is when you receive an email or a text saying something like 'You're account has been compromised, please log in to check your details.' and then they have a link, which looks like it takes you to an official website, but actually it's a site they've set up that will report back whatever log in details you enter. The best defence here is to not click the link, but go yourself to the site and log in to check.</p>
                <hr>
                <strong>Social engineering/too easy to guess password</strong>
                <p>By knowing enough about you, someone can simply guess your password. Maybe it's the name of one of your children, maybe it's your mothers maiden name or your favourite football team. All bad ideas, make your passwords as random as possible.</p>
                <hr>
                <strong>Brute force attack</strong>
                <p>A program will simply try password after password until it gets to the correct one. Sounds a long process, but it can often process millions of tries per second. You'd be surprised how quickly even an 8 digit alphanumberic password can be cracked this way. Make your passwords longer to exponentially increase the time needed for a brute force attack.</p>
                <hr>
                <strong>Website hacked</strong>
                <p>You see data breaches far too often in the news. Some big ones recently include <a href="http://www.bbc.co.uk/news/technology-43033202">Equifax</a> and <a href="http://www.bbc.co.uk/news/technology-30189029">Sony</a> and often means millions of people's data is compromised.</p>
                <p>There's not so much you can do here, aside from avoiding any site that you feel isn't safe. One big red flag would be if they can send you your password, as this means they're storing the actual password online. No site should be doing this, as they should be storing a hash of your password. There would be almost no way for the hash to be decoded back to you password, but when you log in, they hash what you typed as your password and match it against the hash they have stored. If they are the same, in you go! Watch the video for a better description of this.</p>
                <hr>
                <p>Why not head to the forum to <a href="http://androidandy.uk/phpbb/viewtopic.php?f=4&t=11">share any of your own tips</a>.</p>
                <div class="youtube-player" data-id="qoKyCeG09Tc"></div>
                <p style="font-size:11px"><a href="https://www.youtube.com/watch?v=qoKyCeG09Tc">Click here to see my video explanation of this.</a></p>
            </div>

            <form method="post" action="http://www.http://androidandy.uk/phpbb/posting.php?mode=reply&f=4&t=11">
                <input type="hidden" name="message" value="Hello World, hear my comment!">

                <input type="hidden" name="username" value="DogsAndThings">

                <input type="hidden" name="preview" value="preview">

                <input type="submit" value="post">
            </form>
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
