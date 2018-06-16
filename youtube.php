<!--...............................................................................
Youmax Classic v1.0 by Jake H. from CodeHandling
................................................................................-->

<!DOCTYPE html>
<html>

<head>
    <title>AndroidAndyUK on YouTube</title>
    <?php
            include 'header.php';
            ?>

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

    <?php
            include 'navbar.php';
            ?>

        <div id="bodymain" class="container" style="padding:0px">


            <script id="twine-script" src="//apps.twinesocial.com/embed?app=AndyCr15">
                < a href = "http://www.twinesocial.com/blog/cast-pinterest-to-chromecast/"
                id = "twine-hub-url" > cast Pinterest to Chromecast < /a>

            </script>

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
        <?php
            include 'footer.php';
        ?>

</body>

</html>
