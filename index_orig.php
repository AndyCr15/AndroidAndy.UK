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

    <body>

        <?php
            include 'navbar.php';
            ?>
            <div id="bodymain" class="container" style="padding:0px">
                <h1 style="padding:5px 5px 5px 15px">NEWS</h1>
                <div class="container">
                    <div id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading" id="header32">
                                <h6 class="newsdate">18th March 2018</h6>
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-target="#collapse32" aria-expanded="true" aria-controls="collapse32">The MacBook Air 2017 Review Is Done</a>
                                </h2>
                            </div>
                            <div id="collapse32" class="collapse show" aria-labelledby="heading32" data-parent="#accordion">
                                <div class="panel-body">
                                    <p class="newstext">I don't feel the review video went as well as most I do, but hopefully you get a good feel for my opinion.</p>
                                    <p class="newstext">So do I like it? Generally, I'm quite a fan actually. The main negatives people give are the screen and design, but I can't say the screen was an issue for me and the slightly larger bezels don't bother me.</p>
                                    <p class="newstext">On the plus side, I love the portability, I love the gestures, I love the backlit keyboard and I'm just about coping with MacOS which is actually nice and smooth, even on what is considered the 'budget' MacBook.</p>
                                    <p class="newstext">I think I could definitely be tempted when a 2018 version comes out and I am also on the lookout for a cheap second hand iPhone, but I promise you, it's only for helping with my iOS coding development, I'm not switching sides!</p>
                                    <div class="youtube-player" data-id="CkmaplnDZLE"></div>
                                    <p style="font-size:11px"><a href="https://www.youtube.com/watch?v=CkmaplnDZLE">Click here to watch ,y review of the MacBook Air 2017.</a></p>
                                    <p class="newstext">Come and let me know what you think <a href="http://androidandy.uk/phpbb/viewtopic.php?f=9&t=7">on my forum post about my MacBook</a>.</p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="header31">
                                <h6 class="newsdate">18th March 2018</h6>
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-target="#collapse31" aria-expanded="true" aria-controls="collapse31">Bootstrap Update - Website Fixed!</a>
                                </h2>
                            </div>
                            <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#accordion">
                                <div class="panel-body">
                                    <p class="newstext">I actually enjoy debugging code... mostly. I think you need to if you're going to be a programmer, you spend too much of your time doing it!</p>
                                    <p class="newstext">I'd noticed this week that the 'accordion' effect wasn't working consistently on this front page. Sometimes you could click something and it wouldn't open. Then you would open new articles but the others didn't close.</p>
                                    <p class="newstext">Someone had mentioned to me that the navbar broke with the latest version of Bootstrap, but I wondered if this update would fix my accorion woes, so this morning I updated Bootstrap.</p>
                                    <p class="newstext">It did break the navbar, but that was quite easy to fix. In fact, now it's much better, on a mobile you don't get an oversized bar, covering half the site, you get a little drop down menu button instead!</p>
                                    <p class="newstext">I also realised the collapsing accordion code had totally changed, so I went through each of these news items and changed the code! Okay, they bit wasn't all that fun, but it's done the job!</p>
                                    <p class="newstext">Now I need to see if I can be bothered to do it for the 'Show more news' bit at the bottom... that's a lot of work!</p>
                                    <p class="newstext">In the mean time, please report any bugs you find <a href="http://androidandy.uk/phpbb/viewforum.php?f=13">in the coding forum</a>. Thanks!</p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="header30">
                                <h6 class="newsdate">6th March 2018</h6>
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">I've Bought a MacBook?!</a>
                                </h2>
                            </div>
                            <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordion">
                                <div class="panel-body">
                                    <p class="newstext">Not a video I had thought I would ever be making, but don't worry, I explain why...</p>
                                    <div class="youtube-player" data-id="sMzU5LfvCBw"></div>
                                    <p style="font-size:11px"><a href="https://www.youtube.com/watch?v=sMzU5LfvCBw">Click here to see my explanation of why I bought a MacBook Air 2017.</a></p>
                                    <p class="newstext">Do you think it was a good idea? Why not come and discuss it with me <a href="http://androidandy.uk/phpbb/viewtopic.php?f=9&t=7">on my forum post?</a></p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="header29">
                                <h6 class="newsdate">3rd March 2018</h6>
                                <h2 class="newstitle">
                                    <a data-toggle="collapse" data-target="#collapse29" aria-expanded="false" aria-controls="collapse29">It's Snowing In London!</a></h2>
                            </div>
                            <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#accordion">
                                <div class="panel-body">
                                    <p class="newstext">I took my DJI Mavic Pro out last night and this morning to get some shots of a snowy Barnet.</p>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-lg-4 lightbox-image">
                                            <a href="https://i.imgur.com/h53zIIlh.jpg" data-lightbox="example-1"><img class="example-image" src="https://i.imgur.com/h53zIIlb.jpg" alt="Barnet at night" /></a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4 lightbox-image">
                                            <a href="https://i.imgur.com/0CYJNRhh.jpg" data-lightbox="example-1"><img class="example-image" src="https://i.imgur.com/0CYJNRhb.jpg" alt="Barnet at night" /></a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4 lightbox-image">
                                            <a href="https://i.imgur.com/ICuEjmGh.jpg" data-lightbox="example-1"><img class="example-image" src="https://i.imgur.com/ICuEjmGb.jpg" alt="The DJI Mavic Pro" /></a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4 lightbox-image">
                                            <a href="https://i.imgur.com/ogZOtorh.jpg" data-lightbox="example-1"><img class="example-image" src="https://i.imgur.com/ogZOtorb.jpg" alt="Barnet" /></a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4 lightbox-image">
                                            <a href="https://i.imgur.com/KfqKX7qh.jpg" data-lightbox="example-1"><img class="example-image" src="https://i.imgur.com/KfqKX7qb.jpg" alt="Barnet" /></a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4 lightbox-image">
                                            <a href="https://i.imgur.com/GItApIih.jpg" data-lightbox="example-1"><img class="example-image" src="https://i.imgur.com/GItApIib.jpg" alt="The pilot" /></a>
                                        </div>
                                    </div>
                                </div>

                                <p class="newstext">It's a shame it's too hazy this morning for a decent photo. If the sun breaks through, I'll get back out there, but already I can see the snow is clearing up on the ground.</p>
                            </div>
                        </div>

                        <div style="clear: left;"></div>

                        <hr>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="header28">
                                <div class="newstitle">
                                    <h6 class="newsdate">25th February 2018</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse28" aria-expanded="false" aria-controls="collapse28">AAUK Forum Open</a></h2>
                                </div>
                                <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">I've set up a forum, giving you all a new way of discussing tech and interests with me and others.</p>
                                        <p>Simply click on 'Forum' in the Navbar at the top, register and post away! If you'd like me to look into reviewing something, let me know!</p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header27">
                                    <h6 class="newsdate">22nd February 2018</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse27" aria-expanded="false" aria-controls="collapse27">Mobile Phone Gimbal</a></h2>
                                </div>
                                <div id="collapse27" class="collapse" aria-labelledby="heading32" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">I'm sure it comes as no surpsise that I enjoy making videos. Also, one of the main reasons I have a Pixel 2 XL as my main device is the camera on it, as this is often the main tool of my personal video creation.</p>
                                        <p class="newstext">One thing you generally want when creating video, is a nice smooth frame. The Pixel has fantastic video stabilisation, but nothing can compare to an actual gimbal, so when I saw this Zihyun Smooth-Q Gimbal for only £99, I thought I had to try it!</p>
                                        <p class="newstext">It has three modes, each one locking different axis -</p>
                                        <lu>
                                            <li>Pan Following Mode - Moves with you left and right, but not up and down</li>
                                            <li>Locking Mode - Both up and down and left and right will remain as they began, you move around them.</li>
                                            <li>Following Mode - Will move with you, left and right as well as up and down.</li>
                                        </lu><br>
                                        <p class="newstext">Don't forget the massive 26,000mAh battery giving a quoted 12 hours of smooth recording or you can use it to keep you phone battery topped up, while in use!</p>
                                        <p class="newstext">All in all, it really is a capable little device, which copes just fine with a phone the size of the 2 XL. It's quite impressive how smooth it is, even as I jog along using it and well worth the money if you also love making videos.</p>
                                        <div class="youtube-player" data-id="_qEZVNfSuqw"></div>
                                        <p style="font-size:11px"><a href="https://www.youtube.com/watch?v=_qEZVNfSuqw">Click here to see my video revioew of the gimbal.</a></p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header26">
                                    <h6 class="newsdate">11th February 2018</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse26" aria-expanded="false" aria-controls="collapse26">What's On My Phone</a></h2>
                                </div>
                                <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordion">
                                    <div class="panel-body">
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
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header25">
                                    <h6 class="newsdate">19th January 2018</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse25" aria-expanded="false" aria-controls="collapse25">Changes to YouTube</a></h2>
                                </div>
                                <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">This week I received an email from YouTube that basically explained they were changing the criterea for which channels would be allowed to monetise. They were making it harder for the little guy, now requiring 4,000 hours of watch time in the last 12 months and at least 1,000 subscribers.</p>
                                        <p>Although they don't say this, I'm reasonably sure the reason is due to their fear of losing advertisers over the 'scandal' of them being put before inappropriate videos. Over the last couple of months YouTube introduced an algorythm of some kind that would try and flag these videos and probably around 50-60% of mine would be flagged and I would have to ask for a manual review before they would allow monetisation.</p>
                                        <p>Simply removing all the new/small channels will probably be a much easier way for YouTube to control this, hence the new criterea.</p>
                                        <p>For my main channel, AndroidAndyUK, this is not a problem. I have both of those boxes ticked, but for my personal YouTube channel I do not.</p>
                                        <p>So why am I posting about this then? Becuase although my personal channel is mainly for personal stuff, I have done some none tech related reviews on there for things like mattresses or motorbike locks, some of which do very well. With me no longer being able to monetise these I figure I may as well move them over onto AndroidAndyUK.</p>
                                        <p>So, look out for some rather different videos being uploaded over the next day or two. Let me know in the comments of the video if you think this is a bad idea, or use the <a href="contact.php">contact me</a> page on this site. Thanks.</p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header24">
                                    <h6 class="newsdate">8th January 2018</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapse24">Bluetooth Noise Cancelling Headphones</a></h2>
                                </div>
                                <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">Two unrelated events recently meant I was on the hunt for a set of noise cancelling headphones. The first was actually my brother lending me his new Bose QC35 ii headphones to do a quick review.</p>
                                        <p>The second was my trusty Sony headphones breaking. Impressed as I was by the Bose, I devided to buy my own. What I didn't realise was that there's quite significant audio latency with the Bose, so I shelled out on some Sony 1000XM2 headphones which have a much reduced audio lag.</p>
                                        <p>What that means for you guys, is another headphoen review and a comparison video.</p>
                                        <div class="youtube-player" data-id="zqG1CS5JcE0"></div>
                                        <p style="font-size:11px"><a href="https://www.youtube.com/watch?v=zqG1CS5JcE0">Click here to see my video comparison of the Bose QC35 ii and Sony WH-1000XM2 Bluetooth Noise Cancelling Headphones</a></p>
                                        <p>I'd love to hear your thoughts, use the <a href="contact.php">contact me</a> page to let me know if there are another set of headphones I should be considering!</p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header23">
                                    <h6 class="newsdate">20th December 2017</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">PUBG Going Live</a></h2>
                                </div>
                                <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">For the past year and a half I've been quite consumed by Overwatch. I've clocked up over 570 hours as it's moved into my top 3 all time played games (since records began) behind just Counter Strike and Rift.</p>
                                        <p>A couple of weekends ago though, I bought Playerunknown's Battlegrounds, which has been in early access for around a year, and I think I'm addicted!</p>
                                        <p>The pace of the game is very different to most. It's like a single round of CS that takes half an hour to play. It can be very frustrating though, you play for 20 minutes not seeing anyone, then die to a headshot from someone camping in a bush...</p>
                                        <p>It goes 'live' in less than 24 hours, so here's my video explaining the game as I'm sure it wont be to everyone's tastes.</p>
                                        <div class="youtube-player" data-id="UHi8Fsqvba4"></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header22">
                                    <h6 class="newsdate">23rd November 2017</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">AAUK Podcast</a></h2>
                                </div>
                                <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordion">
                                    <div class="panel-body">
                                        <img class="news" src="images/podcast.png">
                                        <p>Back when I was running <a href="http://www.lanarchy.co.uk/">Lanarchy.co.uk</a> we used to do a podcast every now and then. I think in total we spanned about 4 years as it was actually great fun to do. Quite often there would be 3 or 4 of us talking rubbish about games, tech and movies.</p>
                                        <p>For a while now I've had two thoughts that I wasn't sure what to do about. What's the best way to get little bits of news out to people on a reasonably regular basis and secondly, almost unrelated, I watch a lot of different TV shows and would like a platform to let people know about them. Podcast!</p>
                                        <p>So, I'm aiming for a small podcast each week, the first one is done and is around 15 minutes long. It might be, if it's a slow week, or I'm partricularly busy, it might not get done. There's also a reasonable chance if something big happens, I'll get one out midweek. For now, I thought I would at least get it set up, see if anyone at all wants to listen to me, then I can see where it goes.</p>
                                        <p>To add it to your podcast player, add the feed url - <a href="http://podcast.androidandy.uk/feed.xml">http://podcast.androidandy.uk/feed.xml</a></p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header21">
                                    <h6 class="newsdate">21st November 2017</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">Full Pixel 2 XL Review</a></h2>
                                </div>
                                <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">I've been using the Pixel 2 for a week now, so it seemed about time I recorded my video letting you know what I thought about it.</p>
                                        <p>Warning, it does run almost 35 minutes... but hopefully that at least means I've not left anything out!</p>
                                        <div class="youtube-player" data-id="h95z8DKl6pk"></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header20">
                                    <h6 class="newsdate">19th November 2017</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">How bad is the Pixel 2 XL screen?</a></h2>
                                </div>
                                <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordion">
                                    <div class="panel-body">
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
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header19">
                                    <h6 class="newsdate">18th November 2017</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">Shop Now Open</a></h2>
                                </div>
                                <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">I get sent quite a lot of gadgets to review, quite often I don't really have any interest in using the gadgets myself. Some of them I give away, but I thought I could sell them at a low enough price that my viewers might be happy and I get a few pennies towards my next gadget!</p>
                                        <p>I thought it would also be a good opportunity to test my php and MySQL skills, so I set to work on making my own shop, which is now open for business.</p>
                                        <P>It would appear everything works fine, worse case I can always just refund a Paypal transaction if anything goes wrong.</P>
                                        <p>So, head on over to the <a href="shop.php">shop</a> and see if you can bag yourself a bargain!</p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header18">
                                    <h6 class="newsdate">16th November 2017</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">My New Phone! Pixel 2 XL</a> </h2>
                                </div>
                                <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">I tend to play with quite a few different phones through the year, so when I tell people I'm getting my new phone I usually get 'Oh, another one...' and I have to explain, this time it's different, this really will be MY new phone! Exciting times!</p>
                                        <p>I got quite the run-around from UK Mail, with whom I'd selected 'Collect from depot' only to see their delivery man at my front door (Video Doorbell) as I pulled in to their depot! I spent 1 hour and 40 minutes there and still didn't leave with my phone!</p>
                                        <p>Luckily I had better fortune when I return the next morning and I was finally able to unwrap my new 'daily'!</p>
                                        <div class="youtube-player" data-id="kITQAfgUlYU"></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header17">
                                    <h6 class="newsdate">11th November 2017</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">Weather App For Bikers</a> </h2>
                                </div>
                                <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
                                    <div class="panel-body">
                                        <div class="col-sm-6 col-sm-4" style="padding:0px">
                                            <p>It feels like it's been a while since I did some Android coding, so it was great to be inspired by someone to make a weather app that I will be happy to use myself.</p>
                                            <p>The app itself isn't really the point though, it's all about the notifications. This app will notify me each night of what the weather will be like overnight and in the morning, if it's going to affect me being able to use the bike the next day. If the temperature will drop below 4oC, it will let me know. If it's going to rain overnight or in the morning, it will let me know. It will even tell me if it's likely to be sunny in the morning!</p>
                                            <p>Technically it's still in beta, but I think it's all fully functional and can be bought (support your favourite YouTuber!) for <a href="https://play.google.com/store/apps/details?id=com.androidandyuk.onedayweather">only 59p</a>.</p>
                                            <p>Almost hard to beleive I only started any coding less than 10 months ago, and now this is the 10th app I have on the Play Store. If you give it a go, please be sure to <a href="contact.php">let me know</a> what you think!</p>
                                        </div>
                                        <div class="col-sm-6 col-sm-4"><img style="width:280px; height:auto;" src="images/onedayweather.png"></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="header16">
                                    <h6 class="newsdate">29th October 2017</h6>
                                    <h2 class="panel-title">
                                        <a data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">Best Budget Phone Under £200?</a></h2>
                                </div>
                                <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p class="newstext">It seems to be quite a popular price bracket, the budget end of things up to £200. It's not really one I've ever lived with day to day, but I do enjoy seeing what can be produced at such a great price point. I still say the original Moto G was one of the best value devices ever to be launched. Slick stock Android on a bright and vibrant screen for around £100.</p>
                                        <p>These days the Moto G isn't quite as great value as the original. It comes in a variety of specs, but generally is around the £200 mark. In this budget price bracket you'll find a varity of Chinese devices that aren't generally sold in the UK (or USA) and Xiaomi sits atop that pile as one of the better ones. Generally they all have a fairly ugly skin applied to them, until now... the Xiaomi Mi A1 is an AndroidOne device, meaning it's stock Android!</p>
                                        <p>I bought mine from Banggood and paid around £170 after import TAX. So, is the Xiaomi Mi A1 the best phone you can buy under £200? Watch the video for more information.</p>
                                        <div class="youtube-player" data-id="w_Vo-VmNRAQ"></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

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
