<!DOCTYPE html>

<html lang="en">

<head>
    <title>AndroidAndyUK - Podcasts</title>

    <?php
            include 'header.php';
            ?>
</head>

<body>

    <?php
            include 'navbar.php';
        
            ?>
        <div class="container" style="margin-top:70px">
            <div class="row">
                <?php
                
                // read the xml file
        
                $url = 'http://podcast.androidandy.uk/';
                $localurl = 'feed.xml';

                $podcasts = simplexml_load_file($url.$localurl) or die("feed not loading");

                $x = sizeof($podcasts->channel->item);
                
                //echo '<div class="row">';
                // start a loop to present each podcast
                for ($i = 0; $i<$x ; $i++) {
                $episode = $podcasts->channel->item[$i];
                
                ?>


                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="cardpodcast" class="thumbnail">
                            <div class="caption">
                                <h2>
                                    <?php echo $episode->title ?>
                                </h2>
                                <p>
                                    <div class="poddescription">
                                        <?php echo $episode->description ?>
                                    </div>
                                </p>
                            </div>
                            <div class="podmedia">
                                <audio controls preload="none">
                                    <source src="<?php
                                                    $mp3 = $url.'episode'.($x-$i);
                                                    echo $mp3;
                                                 ?>.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                </audio>
                                <p align="right">
                                    <font size="-2"><strong>
                                        <?php echo $episode->pubDate ?>
                                    </strong></font>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                                                     
                        // still inside the loop, look to see if we're the end of a row
                                                     
                        //if(($i + 1)%3 == 0){
                            // we're the end of a row, so close the div
                        //    echo '</div>';
                        //    echo '<div class="row">';
                        //}
                                                     
                        }
                
                // outside the loop, close the last row
                //echo '</div>';
                ?>
                        <a href="http://podcast.androidandy.uk/feed.xml" style="padding:40px;"><img src="images/rssfeed.gif"></a>
                        <br>

            </div>
            <?php
            include 'footer.php';
            ?>
</body>

</html>
