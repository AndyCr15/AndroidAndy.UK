<!DOCTYPE html>

<html lang="en">

<head>
    <title>AndroidAndyUK - Support Me</title>
    <meta charset="utf-8">
    <?php
        include 'header.php';
    ?>
</head>

<body>

    <?php
            include 'navbar.php';
            ?>

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

        <?php
        include 'footer.php';
    ?>
</body>

</html>
