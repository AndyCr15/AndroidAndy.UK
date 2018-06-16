<!DOCTYPE html>

<?php
//Include and initialize Poll class 
include 'Poll.php';
$poll = new Poll;

//set cachine to hold for 7 days
header("Cache-Control: max-age=604800");

//Check whether vote is submitted
if(isset($_POST['voteSubmit'])){
    $voteData = array(
        'poll_id' => $_POST['pollID'],
        'poll_option_id' => $_POST['voteOpt']
    );
    //Submit vote by Poll class
    $voteSubmit = $poll->vote($voteData);
    if($voteSubmit){ 
        //store in $_COOKIE to signify the user has voted
        setcookie($_POST['pollID'], 1, time()+60*60*24*365);
        $statusMsg = 'Your vote has been submitted successfully.';
        $newURL = 'results.php?pollID='.$_POST['pollID'];
        header('Location: '.$newURL);
        die();
    } else {
        $statusMsg = 'Your vote already had submitted.';
    }
}
?>

    <html lang="en">

    <head>
        <title>AndroidAndyUK</title>
        <?php
        include 'header.php';
    ?>
    </head>

    <body id="page">

        <?php
        include 'navbar.php';
        ?>

            <div id="bodymain" class="container" style="padding:0px">
                <h1 style="padding:5px 5px 5px 15px">NEWS</h1>
                <div class="container">
                    <div id="accordion">


                        <?php

                    // read the xml file

                    $url = 'https://androidandy.uk/';
                    $localurl = 'news.xml';

                    $thisClass = 'collapse';
                    $expanded = 'false';

                    // maximum number of news items to show
                    $maxItems = 15;

                    $news = simplexml_load_file($url.$localurl) or die("feed not loading");

                    // check how many news items there are
                    $x = sizeof($news->item);

                    // start a loop to present each news item
                    for ($i = 0; $i<$x && $i < $maxItems ; $i++) {

                    $thisNews = $news->item[$i];
                        if ($i < 1) {
                                        $thisClass = 'collapse show';
                            $expanded = 'true';
                                    } else {
                                        $thisClass = 'collapse';
                            $expanded = 'false';
                                    }

                    ?>


                            <div class="panel panel-default">
                                <div class="panel-heading" id="heading<?php echo $i ?>">
                                    <div class="newstitle" style="cursor: pointer;">
                                        <h6 class="newsdate">
                                            <?php echo $thisNews->date ?>
                                        </h6>
                                        <h2 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse<?php echo $i ?>" data-target="#collapse<?php echo $i ?>" aria-expanded="<?php echo $expanded ?>" aria-controls="collapse<?php echo $i ?>"><?php echo $thisNews->title ?></a>
                                        </h2>
                                    </div>

                                    <div id="collapse<?php echo $i ?>" class="<?php echo $thisClass ?>" aria-labelledby="heading<?php echo $i ?>" data-parent="#accordion">
                                        <div class="panel-body">
                                            <?php echo $thisNews->text ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <?php

                        }

                    ?>

                                <h3><a href="archive.php">Load More...</a></h3>

                    </div>
                </div>
            </div>

            <?php include 'footer.php'; ?>

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

            <script src="js/lightbox-plus-jquery.min.js" async></script>
    </body>

    </html>
