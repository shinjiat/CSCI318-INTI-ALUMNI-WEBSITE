<?php


session_start();
require_once ('../db/dbconfig.php');
$uid = $_SESSION['globalID'];
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
    <!--    CDN for bootstrap [stable version]-->
    <style>
        a{
            text-decoration: none;
            color:red;
        }
        .card-pad{
            padding:20px;
        }
        p{
            font-size: 20px;
            font-weight: 300;
            font-family: 'Roboto', sans-serif;
        }
        small{
            color:grey;
        }
        label{
            font-size: 20px;
            font-weight: 300;
            font-family: 'Roboto', sans-serif;
            color:dodgerblue;
        }
    </style>

    <title>Document</title>
</head>
<body>
<div class="card card-pad">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="form-group">
                <h5>1) Where are you working now and please tell us your working experience?</h5>
                <textarea style="resize: none" class="form-control" rows="5" id="gurbage"></textarea>
                <br>
                <h5>2) Current Income  <small>(The following information is strictly for university purposes and will not be shared with any third party)</small></h5>
                <div class="radio" id="salary">
                    <input type="radio" name="optradio" value="Under RM 3,000">Under RM 3,000<br>
                    <input type="radio" name="optradio" value="RM 3,000 - RM 5,000">RM 3,000 - RM 5,000<br>
                    <input type="radio" name="optradio" value="RM 5,000 - RM 7,500">RM 5,000 - RM 7,500<br>
                    <input type="radio" name="optradio" value="RM 7,500 - RM 10,000">RM 7,500 - RM 10,000<br>
                    <input type="radio" name="optradio" value="More than RM 10,000">More than RM 10,000<br>
                </div>

                <br>
                <h5>3) Work details</h5>
                <small><u>Current employment status</u></small>
                <div class="radio" id="emps">
                    <input type="radio" name="emp" value="Employed">Employed<br>
                    <input type="radio" name="emp" value="Self-Employed">Self-Employed<br>
                    <input type="radio" name="emp" value="Looking for job">Looking for job<br>
                </div>
            </div>
            <button data-id="<?php echo $uid;?>" class="btn btn-danger exp">Submit</button>
        </li>
    </ul>
</div>
</body>
</html>
