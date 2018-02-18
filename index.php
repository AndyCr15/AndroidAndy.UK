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

    <html lang="en">

    <head>
        <link rel=icon href=favicon.png>
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
                <div id="bodymain" class="container" style="padding:0px">
                    <h1 style="padding:5px 5px 5px 15px">NEWS</h1>
                    <div class="container">
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="newsdate">11th February 2018</h6>
                                    <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse26">What's On My Phone</a></h2>
                                </div>
                                <div id="collapse26" class="panel-collapse collapse in">
                                    <p class="newstext">My latest video is a request from someone, asking me to make a video of what I have installed on my phone. You ask. I deliver!</p>
                                    <div class="youtube-player" data-id="jVE3yzmft0g"></div>
                                    <p style="font-size:11px"><a href="https://www.youtube.com/watch?v=jVE3yzmft0g">Click here to see my video of me taking you through what's installed on my phone.</a></p>
                                    <p class="newstext">The highlights, the daily used essential apps are -</p>
                                    <ul>
                                        <li><a href="https://play.google.com/store/apps/details?id=com.teslacoilsw.launcher&hl=en_GB">Nova Launcher</a></li>
                                        <li><a href="https://play.google.com/store/apps/details?id=com.tvshowfavs&hl=en_GB">TV Show Favs</a></li>
                                        <li><a href="https://play.google.com/store/apps/details?id=mobi.beyondpod&hl=en_GB">BeyondPod Podcast Player</a></li>
                                        <li><a href="https://play.google.com/store/apps/details?id=com.samruston.weather&hl=en_GB">Weather Timeline</a></li>
                                        <li><a href="https://play.google.com/store/apps/details?id=com.androidandyuk.regularreminders&hl=en_GB">Regular Reminders</a></li>
                                        <li><a href="https://play.google.com/store/apps/details?id=com.lastpass.lpandroid&hl=en_GB">Last Pass</a></li>
                                    </ul>
                                    <p class="newstext">Do you have any essential, daily use apps? Why not <a class="nav-link" href="contact.php">let me know</a> about them.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="newsdate">19th January 2018</h6>
                                    <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse25">Changes to YouTube</a></h2>
                                </div>
                                <div id="collapse25" class="panel-collapse collapse">
                                    <p class="newstext">This week I received an email from YouTube that basically explained they were changing the criterea for which channels would be allowed to monetise. They were making it harder for the little guy, now requiring 4,000 hours of watch time in the last 12 months and at least 1,000 subscribers.</p>
                                    <p>Although they don't say this, I'm reasonably sure the reason is due to their fear of losing advertisers over the 'scandal' of them being put before inappropriate videos. Over the last couple of months YouTube introduced an algorythm of some kind that would try and flag these videos and probably around 50-60% of mine would be flagged and I would have to ask for a manual review before they would allow monetisation.</p>
                                    <p>Simply removing all the new/small channels will probably be a much easier way for YouTube to control this, hence the new criterea.</p>
                                    <p>For my main channel, AndroidAndyUK, this is not a problem. I have both of those boxes ticked, but for my personal YouTube channel I do not.</p>
                                    <p>So why am I posting about this then? Becuase although my personal channel is mainly for personal stuff, I have done some none tech related reviews on there for things like mattresses or motorbike locks, some of which do very well. With me no longer being able to monetise these I figure I may as well move them over onto AndroidAndyUK.</p>
                                    <p>So, look out for some rather different videos being uploaded over the next day or two. Let me know in the comments of the video if you think this is a bad idea, or use the <a class="nav-link" href="contact.php">contact me</a> page on this site. Thanks.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="newsdate">8th January 2018</h6>
                                    <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse24">Bluetooth Noise Cancelling Headphones</a></h2>
                                </div>
                                <div id="collapse24" class="panel-collapse collapse">
                                    <p class="newstext">Two unrelated events recently meant I was on the hunt for a set of noise cancelling headphones. The first was actually my brother lending me his new Bose QC35 ii headphones to do a quick review.</p>
                                    <p>The second was my trusty Sony headphones breaking. Impressed as I was by the Bose, I devided to buy my own. What I didn't realise was that there's quite significant audio latency with the Bose, so I shelled out on some Sony 1000XM2 headphones which have a much reduced audio lag.</p>
                                    <p>What that means for you guys, is another headphoen review and a comparison video.</p>
                                    <div class="youtube-player" data-id="zqG1CS5JcE0"></div>
                                    <p style="font-size:11px"><a href="https://www.youtube.com/watch?v=zqG1CS5JcE0">Click here to see my video comparison of the Bose QC35 ii and Sony WH-1000XM2 Bluetooth Noise Cancelling Headphones</a></p>
                                    <p>I'd love to hear your thoughts, use the <a href="contact.php">contact me</a> page to let me know if there are another set of headphones I should be considering!</p>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="newsdate">20th December 2017</h6>
                                    <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse23">PUBG Going Live</a></h2>
                                </div>
                                <div id="collapse23" class="panel-collapse collapse">
                                    <p class="newstext">For the past year and a half I've been quite consumed by Overwatch. I've clocked up over 570 hours as it's moved into my top 3 all time played games (since records began) behind just Counter Strike and Rift.</p>
                                    <p>A couple of weekends ago though, I bought Playerunknown's Battlegrounds, which has been in early access for around a year, and I think I'm addicted!</p>
                                    <p>The pace of the game is very different to most. It's like a single round of CS that takes half an hour to play. It can be very frustrating though, you play for 20 minutes not seeing anyone, then die to a headshot from someone camping in a bush...</p>
                                    <p>It goes 'live' in less than 24 hours, so here's my video explaining the game as I'm sure it wont be to everyone's tastes.</p>
                                    <div class="youtube-player" data-id="UHi8Fsqvba4"></div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="newsdate">23rd November 2017</h6>
                                    <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse22">AAUK Podcast</a></h2>
                                </div>
                                <div id="collapse22" class="panel-collapse collapse">
                                    <img class="news" src="http://podcast.androidandy.uk/podcast.png">
                                    <p>Back when I was running <a href="http://www.lanarchy.co.uk/">Lanarchy.co.uk</a> we used to do a podcast every now and then. I think in total we spanned about 4 years as it was actually great fun to do. Quite often there would be 3 or 4 of us talking rubbish about games, tech and movies.</p>
                                    <p>For a while now I've had two thoughts that I wasn't sure what to do about. What's the best way to get little bits of news out to people on a reasonably regular basis and secondly, almost unrelated, I watch a lot of different TV shows and would like a platform to let people know about them. Podcast!</p>
                                    <p>So, I'm aiming for a small podcast each week, the first one is done and is around 15 minutes long. It might be, if it's a slow week, or I'm partricularly busy, it might not get done. There's also a reasonable chance if something big happens, I'll get one out midweek. For now, I thought I would at least get it set up, see if anyone at all wants to listen to me, then I can see where it goes.</p>
                                    <p>To add it to your podcast player, add the feed url - <a href="http://podcast.androidandy.uk/feed.xml">http://podcast.androidandy.uk/feed.xml</a></p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">21st November 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse21">Full Pixel 2 XL Review</a></h2>
                            </div>
                            <div id="collapse21" class="panel-collapse collapse">
                                <p class="newstext">I've been using the Pixel 2 for a week now, so it seemed about time I recorded my video letting you know what I thought about it.</p>
                                <p>Warning, it does run almost 35 minutes... but hopefully that at least means I've not left anything out!</p>
                                <div class="youtube-player" data-id="h95z8DKl6pk"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">19th November 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse20">How bad is the Pixel 2 XL screen?</a></h2>
                            </div>
                            <div id="collapse20" class="panel-collapse collapse">
                                <p class="newstext">There's been a lot of talk on the internet about the Pixel 2 XL having a substandard screen. A screen you wouldn't expect on a mid-range phone, let alone an £800 device. Unfortunately I didn't see these claims until after I'd had my hands on in the Google Shop on Tottenham Court Road, so back then I wasn't looking for the defects people were complaining about.</p>
                                <p>Well, now I have my own Pixel 2 XL, I thought it was time to check them all out.</p>
                                <ul>
                                    <li>The colours are too flat (does the new update fix this?)</li>
                                    <li>18:9 Screen ratio leaves black bars either side when watching video</li>
                                    <li>The blue tint/shift visible when the screen is angled only slightly</li>
                                    <li>How effective is the screen when viewed through polarising sunglasses</li>
                                    <li>Is there any blotchiness when viewing greys in low light</li>
                                    <li>How bright is the screen</li>
                                    <li>Can I see any screenburn yet</li>
                                </ul>
                                <p>All of these things are tested and looked into in my video. Check it out and leave a comment on whether you think it's an acceptable screen for a £800 phone.</p>
                                <div class="youtube-player" data-id="315K4_jnVVI"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">18th November 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse20">Shop Now Open</a></h2>
                            </div>
                            <div id="collapse20" class="panel-collapse collapse">
                                <p class="newstext">I get sent quite a lot of gadgets to review, quite often I don't really have any interest in using the gadgets myself. Some of them I give away, but I thought I could sell them at a low enough price that my viewers might be happy and I get a few pennies towards my next gadget!</p>
                                <p>I thought it would also be a good opportunity to test my php and MySQL skills, so I set to work on making my own shop, which is now open for business.</p>
                                <P>It would appear everything works fine, worse case I can always just refund a Paypal transaction if anything goes wrong.</P>
                                <p>So, head on over to the <a href="shop.php">shop</a> and see if you can bag yourself a bargain!</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">16th November 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse19">My New Phone! Pixel 2 XL</a> </h2>
                            </div>
                            <div id="collapse19" class="panel-collapse collapse">
                                <p class="newstext">I tend to play with quite a few different phones through the year, so when I tell people I'm getting my new phone I usually get 'Oh, another one...' and I have to explain, this time it's different, this really will be MY new phone! Exciting times!</p>
                                <p>I got quite the run-around from UK Mail, with whom I'd selected 'Collect from depot' only to see their delivery man at my front door (Video Doorbell) as I pulled in to their depot! I spent 1 hour and 40 minutes there and still didn't leave with my phone!</p>
                                <p>Luckily I had better fortune when I return the next morning and I was finally able to unwrap my new 'daily'!</p>
                                <div class="youtube-player" data-id="kITQAfgUlYU"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">11th November 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse18">Weather App For Bikers</a> </h2>
                            </div>
                            <div id="collapse18" class="panel-collapse collapse">
                                <div class="col-sm-6 col-sm-4" style="padding:0px">
                                    <p>It feels like it's been a while since I did some Android coding, so it was great to be inspired by someone to make a weather app that I will be happy to use myself.</p>
                                    <p>The app itself isn't really the point though, it's all about the notifications. This app will notify me each night of what the weather will be like overnight and in the morning, if it's going to affect me being able to use the bike the next day. If the temperature will drop below 4oC, it will let me know. If it's going to rain overnight or in the morning, it will let me know. It will even tell me if it's likely to be sunny in the morning!</p>
                                    <p>Technically it's still in beta, but I think it's all fully functional and can be bought (support your favourite YouTuber!) for <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.onedayweather">only 59p</a>.</p>
                                    <p>Almost hard to beleive I only started any coding less than 10 months ago, and now this is the 10th app I have on the Play Store. If you give it a go, please be sure to <a href="contact.php">let me know</a> what you think!</p>
                                </div>
                                <div class="col-sm-6 col-sm-4"><img style="width:280px; height:auto;" src="images/onedayweather.png"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">29th October 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse17">Best Budget Phone Under £200?</a></h2>
                            </div>
                            <div id="collapse17" class="panel-collapse collapse">
                                <p class="newstext">It seems to be quite a popular price bracket, the budget end of things up to £200. It's not really one I've ever lived with day to day, but I do enjoy seeing what can be produced at such a great price point. I still say the original Moto G was one of the best value devices ever to be launched. Slick stock Android on a bright and vibrant screen for around £100.</p>
                                <p>These days the Moto G isn't quite as great value as the original. It comes in a variety of specs, but generally is around the £200 mark. In this budget price bracket you'll find a varity of Chinese devices that aren't generally sold in the UK (or USA) and Xiaomi sits atop that pile as one of the better ones. Generally they all have a fairly ugly skin applied to them, until now... the Xiaomi Mi A1 is an AndroidOne device, meaning it's stock Android!</p>
                                <p>I bought mine from Banggood and paid around £170 after import TAX. So, is the Xiaomi Mi A1 the best phone you can buy under £200? Watch the video for more information.</p>
                                <div class="youtube-player" data-id="w_Vo-VmNRAQ"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">16th October 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse16">Google Pixel 2 XL Hands On at the Google Store</a></h2>
                            </div>
                            <div id="collapse16" class="panel-collapse collapse">
                                <p class="newstext">I'd hear about various Carphone Warehouse's, EE stores and Curries having stock of the Pixel 2 on display in their stores, but I thought there's only one place I should go to check out the new Pixel 2 and that's the Google Store on Tottenham Court Road.</p>
                                <p>I packed some video equipment into my backpack and headed off into town on the bike. Not sure how happy they'd be with me filming in the store, I was please to find they were more than happy for me to do so, so I set up camp!</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-4"><img style="width:100%; max-height:400px;" src="images/google_store_1.jpg"></div>
                                        <div class="col-md-6 col-sm-4"><img style="max-width:100%; max-height:400px;" src="images/google_store_2.jpg"></div>
                                    </div>
                                </div>
                                <p>I was rather greatful to the staff and the manager, more than happy for em to film away and eager to show me features of the device. It was reasonably busy too, with a variety of people dropping in to ask questions about the Pixel 2 and the occasional question about the Google Home.</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-4"><img style="width:100%; max-height:400px;" src="images/google_store_3.jpg"></div>
                                        <div class="col-md-6 col-sm-4"><img style="max-width:100%; max-height:400px;" src="images/google_store_4.jpg"></div>
                                    </div>
                                </div>
                                <p>So what did I think of the Pixel 2 XL? Watch the video to find out!</p>
                                <div class="youtube-player" data-id="iJLqsyKvlCU"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">15th October 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse15">Which Was Your First Version of Android? (Poll)</a></h2>
                            </div>
                            <div id="collapse15" class="panel-collapse collapse">
                                <div class="col-sm-6 col-sm-4" style="padding:0px">
                                    <p class="newstext">The first version of Android is recorded to have been released on September 23rd, 2008. That means we're now 9 years in. Can you believe it?</p>
                                    <p>For me I think my experience began as Android was in it's Donut stage, when I bought a second hand HTC Hero. How things have moved on since then!</p>
                                    <p>I still fondly remember picking up my Samsung Galaxy Nexus on Oxford Street, the day before we flew to San Francisco for a holiday. It was quite amusing showing a staff member in the local AT&T store my new Nexus running the brand new Ice Cream Sandwich, one of Androids biggest leaps in UI to date, as they'd not yet had the Nexus released in the US. All the staff gathered round in wonder! It seems crazy to think that was 6 years ago next month.</p>
                                    <p>Three years later another huge UI change came to us in Android 5.0 (Lollipop) in the form of Material Design and Android hasn't looked back.</p>
                                    <p>It used to be one of the first things I would look to do to a phone was root it, to a) allow me to restore apps and b) be able to tweak the OS to my liking. That's just not necessary now. Android is so polished.</p>
                                    <p>So, where does your trip down your Android memory lane begin? Place your vote now! Why not come and tell me in my <a href="https://plus.google.com/u/0/communities/110163779598590134554">Google Plus Community</a>.</p>
                                </div>
                                <?php
                                    //Get poll and options data
                                    $pollData = $poll->getPolls();
                                ?>
                                    <div class="col-sm-6 col-sm-4" style="padding:0px">
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
                                    </div>
                            </div>
                        </div>

                        <hr class="newstext">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">14th October 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse14">voiceOver Stats Available</a></h2>
                            </div>
                            <div id="collapse14" class="panel-collapse collapse">
                                <p class="newstext">My most installed app is a sound board app for Overwatch, which I made only to learn a little about using media in Android development. Now over 1,800 people have it installed on their phone!</p>
                                <p>As I've moved on to web development, I thought it an interesting project (again, more as a development learning tool than all that interesting to others) to gather stats on which sounds get played more.</p>
                                <p>To that end, I now have an <a href="http://androidandy.uk/voiceoverstats.php">overVoice Stats page</a>. Install the app <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.voiceover">from here</a> and see the numbers change as you play the sounds!</p>
                                <p>Okay, well, it amuses me...</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">5th October 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse13">Google Pixel 2 Launch Event</a></h2>
                            </div>
                            <div id="collapse13" class="panel-collapse collapse">
                                <p class="newstext">As they did last year, Google declated October 4th would be the date for their big Pixel launch event. Unfortunately, over the preceeding weeks we'd been treated to various leaks so much of what to come was perhaps not news any more.</p>
                                <p>Still, from Pixelbuds to the Pixelbook and the Google Home Max, there were still plenty of things to peak your interest. The whole presentation lasted around two hours and included a lot of talk about machine learning and AI, so I've done a shorter summary of what I think are the 'good bits', with a selection of my opinions thrown in too!</p>
                                <div class="youtube-player" data-id="mUWZLyiyMFs"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">29th September 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse12">Huawei Honor 9</a></h2>
                            </div>
                            <div id="collapse12" class="panel-collapse collapse">
                                <p class="newstext">I think my first Huawei device was the Nexus 6P and there was no denying that was a well made phone. Then last year I tried the Honor 8 and I was really impressed at what Huawei had done at a mid range price point, to I thought I needed to see what the Honor 9 brought to the tabel this year.</p>
                                <p>I picked this one up, second hand, for £270 only a few months after launch and once again, it's impressive what Huawei have done for the money you pay. It's not a great deal different to the Honor 8, but they've addressed some of the weaknesses and made another solid mid-range device.</p>
                                <p>Check out my video review for more detail.</p>
                                <div class="youtube-player" data-id="MEg_1D9c5No"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">16th September 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse11">White Noise Updates!</a></h2>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse">
                                <div class="col-sm-6 col-sm-4" style="padding:0px">
                                    <p class="newstext">This week it was quite nice to go back to one of my first apps, but also one of my most successful apps, and give it an update with some new things I've learnt, mainly the fab button options.</p>
                                    <p>Features added inlcude</p>
                                    <ul>
                                        <li>Sleep timer options through long press on fab</li>
                                        <li>Snackbar instead of toasts</li>
                                        <li>Interactive snackbar while timer runnning, allowing it to be cancelled</li>
                                        <li>Monitoring of which noises are used, through online database</li>
                                        <li>Least popular sound removed (tumble dryer) and replaced with womb noises</li>
                                    </ul>
                                    <p>The update is now rolling out to all 950 users of <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.whitenoise">White Noise</a>. It's another free app, with ad support, so why not take a look!</p>
                                </div>
                                <div class="col-sm-6 col-sm-4"><img style="width:280px; height:auto;" src="images/whitenoiseupdate.png"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">14th September 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Mini Drone!</a></h2>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse">
                                <p class="newstext">This year I got into drones when I bought my first, the DJI Mavic Pro. This week I got myself some indoor drone action, by way of the CX-10WD-TX Mini FPV Drone.</p>
                                <div class="youtube-player" data-id="mLr5AwjwYx8"></div>
                                <p>For only £20, this thing's great fun to fly around you house!</p>
                                <p>Can be found on eBay for £20, or <a href="http://amzn.to/2f6XF8i"> here</a> on Amazon with Prime delivery for just under £40.</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">12th September 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Jelly - The Worlds Smallest 4G Smartphone</a></h2>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                                <p class="newstext">I'd almost forgotten I'd invested in this Indiegogo back in May, but it arrived on my doorstep today and I have to say I'm quite impressed!</p>
                                <div class="youtube-player" data-id="llIjetAc17U"></div>
                                <p>It has a quad core 1.1Ghz CPU, 3 day battery life, 4G radio and an 8MP camera as well as a front facing camera, all fitting in the palm of your hand.</p>
                                <p>Check the Indiegogo page yourself <a href="https://www.indiegogo.com/projects/jelly-the-smallest-4g-smartphone-android#/"> here</a>.</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">2nd September 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Large 'Regular Reminders' update</a></h2>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-4">
                                            <p class="newstext">Generally I update my apps bit by bit, small increments at a time, but this last week I went back to one of my original inspirations to learn to code and have just released a rather large update to the play store.</p>
                                            <p>Features added inlcude</p>
                                            <ul>
                                                <li>Various UI updates</li>
                                                <li>Single or Recurring reminders possible</li>
                                                <li>Side Navigation Drawer implemented</li>
                                                <li>Settings added</li>
                                                <li>Notifications now fixed</li>
                                                <li>Notifications improved (more detail)</li>
                                            </ul>
                                            <p>If you didn't know, <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.regularreminders">Regular Reminders</a> is all about those tasks that don't have a set day or date that they need to be done, they just need doing regularly.</p>
                                            <p>If you've not taken a look yet, head to the <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.regularreminders">Play Store</a> to install it for free!</p>
                                        </div>
                                        <div class="col-sm-6 col-sm-4"><img style="width:280px; height:auto;" src="images/regular_remidners_fab.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">28th August 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Shutting Down 'Bikers Best Friend' App</a></h2>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <p class="newstext">Initially I wrote Bikers Best Friend to be specifically a biker's app. It would have group tracking abilities, chat rooms and more. I then duplicated it and called the second app <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.autobuddy">Auto Buddy</a>.</p>
                                <p>Since I have now made <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.rideoutbuddy">Ride Out Buddy</a>, there is less need for the biker specific version, but initially duplicating edits across the two apps wasn't too time consuming.</p>
                                <p>This week I have made quite a big UI update to <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.autobuddy">Auto Buddy</a>, which would take quite some time to duplicate onto Bikers Best Friend, so I have made the decision to stop developing BBF. Don't worry though, simply back-up your database in settings, install <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.autobuddy">Auto Buddy</a> and restore the database and carry on as you where!</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/bbf_main.png"></div>
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/autobuddy1.png"></div>
                                    </div>
                                </div>
                                <p>On the left is Bikers Best Friend, on the right, the new look Auto Buddy.</p>
                                <p>I realise it's a bit of a pain, but I hope you appreciate why I'm doing this.</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">27th August 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse6">UI Updates For My Apps</a></h2>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <p class="newstext">I'm very much learning Android as I go and recently I learnt about the Navigation Drawer (the slide in from the side menu) and it lead to me going back to my first apps and upgrading their 'User Interface'.</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/autobuddy1.png"></div>
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/autobuddy2.png"></div>
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/autobuddy3.png"></div>
                                        <p>&nbsp;</p>
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/rideoutbuddy1.png"></div>
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/rideoutbuddy2.png"></div>
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/rideoutbuddy3.png"></div>
                                    </div>
                                </div>
                                <p class="newstext">Something else I learnt early on was making nice round buttons, with a colourful edge to them. I realise these were not giving my apps a good look, so I've gone darker, squarer and simpler. I hope you agree it's a good look.</p>
                                <p class="newstext">I think next I need to go back to my very first app, Multi Kitchen Timer and see if I can make that a little prettier and more user friendly.</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">26th August 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse5">ROMOSS External Battery</a></h2>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <p class="newstext">I think this is perhaps the first portable battery I've been sent that has a digital display showing how much power is left in it. It's a small difference from the usual 4 lights giving you a rough idea, but it's actually very handy.</p>
                                <div class="youtube-player" data-id="wPT5qwFUIbY"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">20th August 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">New App In Beta</a></h2>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <p class="newstext">My new app has just hit the Google Play Store, based on things I learnt doing Ride Out Buddy, this time it's a simple Lap Timer. It used GPS and some fancy maths to give you lap times of any type of circuit you might go round.</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/laptimerbuddy1.png"></div>
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/laptimerbuddy2.png"></div>
                                        <div class="col-md-4 col-sm-3"><img style="width:280px; height:auto;" src="images/laptimerbuddy3.png"></div>
                                    </div>
                                </div>
                                <p>More info will come soon, once I've been able to test it some more, and add a few more tweaks to it, but it's on the Play Store now for 99p.</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">13th August 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Ride Out Buddy Update</a></h2>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <p class="newstext">I've just released an update to the Google Play store which has some changes to Groups on the front page. You can now delete your own groups (highlighted in bold). There is now no need to use the password to join your own groups either.</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">13th August 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">AndroidAndy.UK Launched</a> </h2>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <p class="newstext">I've been toying with the idea of having an AAUK website for some time. With my next endevour being to learn some HTML, Javascript and Python, I thought why not do it while making my very own website! It's rather basic at the moment, but will hopefully grow as I learn!</p>
                                <p>As always, I'm happy to receive any feedback you might have, see how you can contact me <a href="contact.html">here</a>.</p>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="newsdate">12th August 2017</h6>
                                <h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">DJI Mavic Pro Review</a></h2>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <p class="newstext">I finally got round to doing my review of the Mavic Pro.</p>
                                <div class="youtube-player" data-id="hGg-odLSy6U"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <?php include 'counter.php'; ?>

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
                <script>
                    $(function() {
                        $('img').on('click', function() {
                            $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
                            $('#enlargeImageModal').modal('show');
                        });
                    });

                </script>
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
                <script src="//inc.freefind.com/inc/ffse-overlay.min.js" async></script>
                <script src="js/script.js"></script>
    </body>

    </html>
