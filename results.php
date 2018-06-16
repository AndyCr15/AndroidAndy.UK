<?php
//Include and initialize Poll class 
include 'Poll.php';
$poll = new Poll;
?>
    <?php
//Get poll result data
$pollResult = $poll->getResult($_GET['pollID']);
?>

        <!DOCTYPE html>

        <html lang="en">

        <head>
            <title>Poll Results</title>
            <?php
            include 'header.php';
            ?>
        </head>

        <body>

            <?php
            include 'navbar.php';
            ?>
                <div id="bodymain" class="container" style="padding:0px ">

                    <h1>
                        <?php echo $pollResult['poll']; ?>
                    </h1>
                    <p>
                        <b>Total Votes:</b>
                        <?php echo $pollResult['total_votes']; ?>
                    </p>


                    <?php
            if(!empty($pollResult['options'])){ $i=0;
                //Option bar color class array
                $barColorArr = array('green','yellow','red','blue','grey');
                //Generate option bars with votes count
                foreach($pollResult['options'] as $opt=>$vote){
                    //Calculate vote percent
                    $votePercent = round(($vote/$pollResult['total_votes'])*100);
                    $votePercent = !empty($votePercent)?$votePercent.'%':'0%';
                    //Define bar color class
                    if(!array_key_exists($i, $barColorArr)){
                        $i=0;
                    }
                    $barColor = $barColorArr[$i];
            ?>

                        <div class="bar-main-container <?php echo $barColor; ?>">
                            <div class="txt">
                                <?php echo $opt; ?>
                            </div>
                            <div class="wrap">
                                <div class="bar-percentage">
                                    <?php echo $votePercent; ?>
                                </div>
                                <div class="bar-container">
                                    <div class="bar" style="width: <?php echo $votePercent; ?>;"></div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; } } ?>
                        <a href="index.php">Return</a>

                </div>

                <?php
            include 'footer.php';
            ?>
        </body>

        </html>
