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

                <h6 class="newsdate">6th April 2018</h6>
                <h2>A Safer and Faster Internet is No Joke</h2>
                <p>Interesting timing, the day after I record my video about online security that Cloudflare and APNIC announce they have a simple way for everyone make themselves more secure and private online and it can be done in a matter of minutes.  It was also quite interesting that they chose to announce it on April 1st...  so many people took the news to be a joke!</p>
                <img src="../images/1111<?php $random = rand(1,4); echo $random; ?>.jpg" alt="[ 1.1.1.1 ]" width="100%" />
                <p>The method revolves around your DNS servers.  What are DNS servers you ask?  They're a little bit like the contacts app in your phone.  Everything attached to the internet has an IP address, which basically says where it's hosted.  A little bit like your mate has a phone number.  You dial the number and that number is used to connect you to the right phone. With modern phones, you actually just tap a contact in your phone and the phone looks up and dials that contacts number. In this instance you type into your browser www.androidandy.uk and your DNS server looks up the url and sends you off to an IP address of my webhost, so you can see my website.</p>
                <p>So, in most cases your ISP (Internet Service Provider) controls the DNS for you.  What that also means is, they know every website you visit...  as they are the ones decoding the url's for you.  Doesn't sound so great, right?  That's where 1.1.1.1 steps in.</p>
                <p>What you do, is change your DNS servers to 1.1.1.1 and 1.0.0.1 (you need to specify two) and they do the looking up of IP addresses for you and your ISP is none the wiser.</p>
                <p>The best way to do this is in your router, as that means any machine or phone connected will use these new DNS servers.  Unfortunately it doesn't look like you can set them on your Android device for use when out and about.</p>
                <p>1.1.1.1 isn't the only public DNS you can use, but they seem to have many benefits, such as the promised security and also speed.</p>
                <img src="/images/1111speed.jpg" width="100%">
                <p>I'm not convinced this will make a world of difference in general, as surely the larger speed aspect comes in loading the page.  It's a bit like our phone example. I don't mind that much if it takes my phone 60ms to look up the contact, when it's going to take 10 seconds or so to get connected anyway, but still, good to know they are fast I guess!</p>
                <p>If you want to read more about this, or get more instructions on how to set it up, head over to <a href="https://1.1.1.1/">1.1.1.1</a> for more info.</p>
                <p>If this article has helped in anyway, maybe you'd like to buy me a coffee?  (See the little button in the bottom left)</p>
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
