<style>
    .pollContent {
        float: left;
        width: 500px;
    }

    .pollContent h3 {
        font-size: 18px;
        color: #333;
        text-align: left;
        float: left;
        width: 100%;
        margin: 0 auto;
    }

    .pollContent ul {
        list-style: none;
        float: left;
        width: 100%;
        padding: 10px;
    }

    .pollContent li {

        vertical-align: top;
        padding: 5px;
    }

    .pollContent input[type="submit"],
    .pollContent a {
        border: none;
        font-size: 16px;
        color: #fff;
        border-radius: 3px;
        padding: 10px 15px 10px 15px;
        background-color: #6EA3CC;
        text-decoration: none;
        cursor: pointer;
    }

    input[type="radio"] {

        vertical-align: top;
        margin-right: 8px;
    }

</style>
<?php
//Include and initialize Poll class 
include 'Poll.php';
$poll = new Poll;

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

    <?php
    //Get poll and options data
    $pollData = $poll->getPolls();
?>
        <div class="pollContent">
            <?php echo !empty($statusMsg)?'<p class="stmsg">'.$statusMsg.'</p>':''; ?>
            <form action="" method="post" name="pollFrm">
                <h3>
                    <?php echo $pollData['poll']['subject']; ?>
                </h3>
                <ul>
                    <?php foreach($pollData['options'] as $opt){
            echo '<li><input type="radio" name="voteOpt" value="'.$opt['id'].'" >'.$opt['name'].'</li>';
        } ?>
                </ul>
                <input type="hidden" name="pollID" value="<?php echo $pollData['poll']['id']; ?>">
                <input type="submit" name="voteSubmit" class="button" value="Vote">
                <a href="results.php?pollID=<?php echo $pollData['poll']['id']; ?>">Results</a>
            </form>
        </div>
