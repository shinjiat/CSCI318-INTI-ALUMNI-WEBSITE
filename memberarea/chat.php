<?php
/**
 * Created by PhpStorm.
 * User: julfi
 * Date: 15/06/2017
 * Time: 6:56 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--    CDN for bootstrap [stable version]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
            integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
            crossorigin="anonymous"></script>
    <!--    CDN for bootstrap [stable version]-->

    <title>Chat</title>

</head>
<body>
<link rel="stylesheet" type="text/css" href="css/chat.css">
<h2 class="text-center">Chat</h2>
<div class="container">
    <div class="message-candidate center-block">
        <div class="row">
            <div class="col-xs-8 col-md-6">
                <img src="http://imgc.allpostersimages.com/images/P-473-488-90/68/6896/2GOJ100Z/posters/despicable-me-2-minions-movie-poster.jpg" class="message-photo">
                <h4 class="message-name">Mr. Minion</h4>
            </div>
            <div class="col-xs-4 col-md-6 text-right message-date">Date here</div>
        </div>
        <div class="row message-text">
            text over here text over here text over here text over here text over here text over here text over here text over here text over here
        </div>
    </div>
    <div class="message-hiring-manager center-block">
        <div class="row">
            <div class="col-xs-8 col-md-6 text-right">
                <img src="http://imgc.allpostersimages.com/images/P-473-488-90/68/6896/2GOJ100Z/posters/despicable-me-2-minions-movie-poster.jpg" class="message-photo">
                <h4 class="message-name">Mr. Minion</h4>
            </div>
            <div style="float:left;" class="col-xs-4 col-md-6 message-date">Date here</div>
        </div>
        <div class="row message-text ">
            text over here text over here text over here text over here text over here text over here text over here text over here text over here
        </div>
    </div>
    <div class="messaging center-block">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button">Send</button>
          </span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
