<!DOCTYPE html>
<html>
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
    <!--    CDN for bootstrap [stable version]-->



</head>
<body>

<?php
session_start();
  include('db/dbconfig.php');
  ?>
    <!--//sub-heard-part-->
    <!--/profile-->
    <h3 class="sub-tittle pro">Add Workshop</h3>

            <form action="addworkshop.php" method="post">
                <div id="workshop-div"><h3 style="color:white">Workshop Details</h3>
                    <div class="list-group-item">
                        <input type="text" name="title" placeholder="Title" class="form-control no-border" required><br/>
                        <input type="text" name="date" placeholder="Date" class="form-control no-border" required><br/>
                        <input type="text" name="slot" placeholder="Slot" class="form-control no-border" required><br/>
                        <textarea rows="4" cols="50" id="content" placeholder="About Workshop"></textarea>
                        <input type="submit" name="submit_workshop" id="submit_workshop" class="btn btn-lg btn-danger btn-block"></button>
                    </div>
                </div>

            </form>

<script src="modify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
