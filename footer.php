<style>
    .bmc-button img {
        width: 27px !important;
        margin-bottom: 1px !important;
        box-shadow: none !important;
        border: none !important;
        vertical-align: middle !important;
    }

    .bmc-button {
        line-height: 36px !important;
        height: 37px !important;
        text-decoration: none !important;
        display: inline-flex !important;
        color: #000000 !important;
        background-color: #FFFFFF !important;
        border-radius: 3px !important;
        border: 1px solid transparent !important;
        padding: 1px 9px !important;
        font-size: 23px !important;
        letter-spacing: 0.6px !important;
        box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;
        -webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;
        margin: 0 auto !important;
        font-family: 'Cookie', cursive !important;
        -webkit-box-sizing: border-box !important;
        box-sizing: border-box !important;
        -o-transition: 0.3s all linear !important;
        -webkit-transition: 0.3s all linear !important;
        -moz-transition: 0.3s all linear !important;
        -ms-transition: 0.3s all linear !important;
        transition: 0.3s all linear !important;
    }

    .bmc-button:hover,
    .bmc-button:active,
    .bmc-button:focus {
        -webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;
        text-decoration: none !important;
        box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;
        opacity: 0.85 !important;
        color: #000000 !important;
    }

</style>
<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"><a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/AAUK"><img src="https://www.buymeacoffee.com/assets/img/BMC-btn-logo.svg" alt="Buy me a coffee"><span style="margin-left:5px">Buy me a coffee</span></a>

<?php include 'http://androidandy.uk/counter.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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

<script src="js/script.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // iOS web app full screen hacks.
        if (window.navigator.standalone == true) {
            // make all link remain in web app mode.
            $('a').click(function() {
                window.location = $(this).attr('href');
                return false;
            });
        }
    });

</script>
