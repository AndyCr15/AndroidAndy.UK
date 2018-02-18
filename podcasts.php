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

        <?php
            include 'header.php';
        
            ?>
            <div class="container" style="margin-top:70px">

                <?php
                
                // read the xml file
        
                $url = 'http://podcast.androidandy.uk/';
                $localurl = 'feed.xml';

                $podcasts = simplexml_load_file($url.'feed.xml') or die("feed not loading");

                $x = sizeof($podcasts->channel->item);
                for ($i = 0; $i<$x ; $i++) {
                $episode = $podcasts->channel->item[$i];
                
                ?>


                    <div class="col-md-4 col-sm-3">
                        <div id="cardpodcast" class="thumbnail">
                            <div class="caption">
                                <h2>
                                    <?php echo $episode->title ?>
                                </h2>
                                <p>
                                    <?php echo $episode->description ?>
                                </p>
                            </div>
                            <div class="podmedia">

                                <p>
                                    <font size="-2"><strong>
                                        <?php echo $episode->pubDate ?>
                                    </strong></font>
                                </p>
                                <audio controls>
                                    <source src="<?php
                                                    $mp3 = $url.'episode'.($x-$i);
                                                    echo $mp3;
                                                 ?>.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>

                            </div>
                        </div>
                    </div>

                    <?php
                        }
                     include 'counter.php'; ?>

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
