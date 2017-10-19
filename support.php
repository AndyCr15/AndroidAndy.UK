<!DOCTYPE html>

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

        <nav class="navbar navbar-fixed-top navbar-dark" style="background-color: #74AAD3;">
            <a class="navbar-brand" href="index.php">AAUK</a>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="youtube.php">YouTube</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="android.php">Android Apps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Me</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="support.php">Support Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Me</a>
                </li>
            </ul>
            <form class="form-inline pull-xs-right" style="padding: 20px; line-height: 28px;">
                <td>
                    <button class="btn btn-primary-outline" type="submit" style="height: 35px; float: right;">Search</button>
                    <input type="hidden" name="si" value="71011143">
                    <input type="hidden" name="pid" value="r">
                    <input type="hidden" name="n" value="0">
                    <input type="hidden" name="_charset_" value="">
                    <input type="hidden" name="bcd" value="&#247;">
                    <input type="text" name="query" size="15" style="height: 35px; float: right;">


                </td>
            </form>

        </nav>


        <div id="bodymain" class="container">

            <p style="margin-top:0px">Making vidoes and making apps takes both money and time, both of which I wish I had more of!</p>
            <p>There are a number of ways you can help if you'd like to see more from me.</p>

            <hr>

            <h2><a href="https://www.patreon.com/AAUK">Patreon</a></h2>
            <p>This is perhaps the best way. Contributing just a few pounds every month can help me afford more gadgets to play with. My hope is once I have a few contributors I can start giving away some of the gadgets I get sent, to say thank you for the support.</p>

            <hr>

            <h2>Donation</h2>
            <p>Perhaps the quickest and easiest thing to do, make a one time donation using PayPal, which would be much appreciated.</p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

                <!-- Identify your business so that you can collect the payments. -->
                <input type="hidden" name="business" value="andycr15@gmail.com">

                <!-- Specify a Donate button. -->
                <input type="hidden" name="cmd" value="_donations">

                <!-- Specify details about the contribution -->
                <input type="hidden" name="item_name" value="AAUK Donation">
                <input type="hidden" name="item_number" value="Helping out.">
                <input type="hidden" name="currency_code" value="GBP">

                <!-- Display the payment button. -->
                <input type="image" name="submit" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_donate_92x26.png" alt="Donate">
                <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">

            </form>

            <hr>

            <h2>Free Ways To Support</h2>
            <p>Thumbs up and comment on <a href="https://www.youtube.com/channel/UCcEABI0oEXcsLwnEC4oT4bQ">my videos</a>. Most importantly, if you like something I've done, please share and pass it on to others!</p>
            <p>I get sent quite a few gadgets through Amazon which is helped by my reviewer rating over there. <a href="https://www.amazon.co.uk/gp/cdp/member-reviews/A1C9T8XXO4BUDR/">Take a look</a> and 'vote helpful' when you think it's appropriate!</p>

        </div>

        <?php include 'counter.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

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
        <script src="//inc.freefind.com/inc/ffse-overlay.min.js" async></script>
</body>

</html>
