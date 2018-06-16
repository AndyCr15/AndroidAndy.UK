<!DOCTYPE html>

<html lang="en">

<head>
    <title>AndroidAndyUK - VoiceOver Stats</title>

    <?php
            include 'header.php';
            ?>

        <script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
        <script language="javascript" type="text/javascript" src="js/voiceover.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>

<body>

    <?php
            include 'navbar.php';
            ?>

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

        <?php
            include 'footer.php';
            ?>
</body>

</html>
