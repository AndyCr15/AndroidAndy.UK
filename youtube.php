<!--...............................................................................
Youmax Classic v1.0 by Jake H. from CodeHandling
................................................................................-->

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/aauk.css">

    <!-- Youmax Scripts -->
    <link href="./css/youmax.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="./js/youmax.min.js"></script>
    <!-- ends -->

    <style>
        body {
            margin: 0px;
            box-sizing: border-box;
        }

        #your-page-column {
            width: 70%;
            margin: 0px auto;
            text-align: center;
        }

        .support {
            display: inline-block;
            background-color: #009688;
            color: white;
            padding: 1em;
            font-size: 1.2em;
            font-family: Calibri;
            margin: 4em auto;
            text-align: left;
            width: 18em;
        }

        .support .fa-group {
            font-size: 2.2em;
            float: left;
            margin-right: 0.3em;
        }

        .footer i {
            color: #E91E63;
        }

        .footer {
            margin: 4em auto;
            font-family: Calibri;
            font-size: 1em;
        }

    </style>

</head>

<body>
    <form action="http://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">

        <nav class="navbar navbar-fixed-top navbar-dark" style="background-color: #74AAD3;">
            <a class="navbar-brand" href="index.php">AAUK</a>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="youtube.php">YouTube</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="android.php">Android Apps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Me</a>
                </li>
                <li class="nav-item">
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

        <div id="bodymain" class="container" style="padding:0px">


            <!--Youmax Container-->
            <div class="youmax"></div>
            <!-- ends -->

            <!-- Youmax Call -->
            <script>
                $(document).ready(function() {

                    $(".youmax").youmax({
                        apiKey: "AIzaSyBZpLPTMWqBTPOE3a304_1h0I5dKm1gag8",

                        channelLink: "https://www.youtube.com/user/AndroidAndyUK",
                        playlistLink: "https://www.youtube.com/playlist?list=PL7yylB7GHxIvcv9i-Mgt--AlTPeyNMJuL",

                        defaultTab: "Uploads", //Uploads|Playlists|Featured
                        videoDisplayMode: "popup", //popup|link|inline

                        maxResults: "9",
                        autoPlay: false,
                        displayFirstVideoOnLoad: true, //for inline video display mode only


                        responsiveBreakpoints: [600, 900, 2000, 2500],

                        loadMoreText: "<i class=\"fa fa-plus\"></i>&nbsp;&nbsp;Show me more videos..",
                        previousButtonText: "<i class=\"fa fa-angle-left\"></i>&nbsp;&nbsp;Previous",
                        nextButtonText: "Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>",
                        loadingText: "loading...",
                        allDoneText: "<i class=\"fa fa-times\"></i>&nbsp;&nbsp;All done..",

                        hideHeader: false,
                        hideTabs: false,
                        hideLoadingMechanism: false,


                    });
                });

            </script>
            <!-- ends -->

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
        <script src="//inc.freefind.com/inc/ffse-overlay.min.js" async></script>
</body>

</html>
