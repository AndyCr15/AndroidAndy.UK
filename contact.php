<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "mail@androidandy.uk";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, I\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
    }

?>


    <!DOCTYPE html>

    <html lang="en">

    <head>

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


                <div class="container" style="margin-top:70px">

                    <div class="row">

                        <div class="col-md-4 col-sm-3">
                            <div id="card" class="thumbnail">
                                <a href="mailto:mail@androidandy.uk"><img style="display:block;margin: 0 auto;" src="images/email-flat.png" alt="..."></a>
                                <div class="caption">
                                    <h3>Email</h3>
                                    <p>Drop me an email at mail@androidandy.uk, I'll get back to you. Alternatively, fill out the form below.</p>
                                    <p><a href="mailto:mail@androidandy.uk" class="btn btn-primary" role="button">Email Me</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-3">
                            <div id="card" class="thumbnail">
                                <a href="https://twitter.com/AndyCr15"><img style="display:block;margin: 0 auto;" src="images/twitter.ico" alt="..." style="margin:50px 0px"></a>
                                <div class="caption">
                                    <h3>Tweet Me</h3>
                                    <p>Send me a tweet @AndyCr15.</p>
                                    <p><a href="https://twitter.com/AndyCr15" class="btn btn-primary" role="button">Twitter</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-3">
                            <div id="card" class="thumbnail">
                                <a href="https://plus.google.com/u/0/+AndroidAndyUK"><img style="display:block;margin: 0 auto;" src="images/google-plus.ico" alt="..."></a>
                                <div class="caption">
                                    <h3>Google Plus</h3>
                                    <p>Possibly the slowest way to contact me, but I'm on Google Plus.</p>
                                    <p><a href="https://plus.google.com/u/0/+AndroidAndyUK" class="btn btn-primary" role="button">Google Plus</a></p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <h1>Get in touch!</h1>

                    <div id="error">
                        <? echo $error.$successMessage; ?>
                    </div>

                    <form method="post">
                        <fieldset class="form-group">
                            </br>
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                            <small class="text-muted">I'll never share your email with anyone else.</small>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleTextarea">Enter your message here</label>
                            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                        </fieldset>
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                    </form>


                    </br>
                    </br>


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
                <script type="text/javascript">
                    $("form").submit(function(e) {

                        var error = "";

                        if ($("#email").val() == "") {

                            error += "The email field is required.<br>"

                        }

                        if ($("#subject").val() == "") {

                            error += "The subject field is required.<br>"

                        }

                        if ($("#content").val() == "") {

                            error += "The content field is required.<br>"

                        }

                        if (error != "") {

                            $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

                            return false;

                        } else {

                            return true;

                        }
                    })

                </script>
    </body>

    </html>
