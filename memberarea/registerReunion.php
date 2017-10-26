<?php

session_start();
require_once ('../db/dbconfig.php');

$uid = $_SESSION['globalID'];

$query = mysqli_query($dbconfig,"select * from _user where id='$uid'");
$row = $query->fetch_assoc();
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];

$year = "";
if(isset($_GET['year'])){
    $year = $_GET['year'];
}else{
    header('location:index.php');
}
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
        .card-pad{
            padding:20px;
        }
        label{
            font-size: 20px;
            font-weight: 300;
            font-family: 'Roboto', sans-serif;
            color:dodgerblue;
        }
        .warning{
            font-size: 15px;
            color:grey;
        }
        li{
            height:150px;
        }
        h4{
            color:green;
        }
    </style>

</head>
<body>
<div class="card card-pad">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="col-xs-7">
                <label for="fname">First Name</label>
                <p class="warning">(This is how your name will appear on the committee roster.)</p>
                <input class="form-control" id="fname" type="text" value="<?php echo $fname;?>">
            </div>
        </li>
        <li class="list-group-item">
            <div class="col-xs-7">
                <label for="lname">Last Name</label>
                <p class="warning">(This is how your name will appear on the committee roster.)</p>
                <input class="form-control" id="lname" type="text" value="<?php echo $lname;?>">
            </div>
        </li>
        <li class="list-group-item">
            <div class="col-xs-7">
                <label for="lname">Email</label>
                <p class="warning">(This is how your email will appear on the committee roster.)</p>
                <input class="form-control" id="email" type="email" value="<?php echo $email;?>">
            </div>
        </li>
        <li style="height: 120px" class="list-group-item">
            <div class="col-xs-7">
                <label>Your class year is <h4><?php echo $year;?></h4></label>
                <p class="warning">(Your graduation decade with which you would like to be associated)</p>
            </div>
        </li>
        <li style="height: 180px" class="list-group-item">
            <div class="col-xs-7">
                <label>Yes, I'd like to help with my class reunion in the following ways</label>
                <p class="warning">(Check all that apply)</p>
                <div class="checkbox">
                    <h5><input class="extraService" type="checkbox" value="CTE">Encourage reunion attendance over the summer by calling/texting/emailing my classmates</h5>
                    <h5><input class="extraService" type="checkbox" value="PFG">Post content or add comments to our private Class Facebook group</h5>
                    <h5><input class="extraService" type="checkbox" value="PCR">Contribute photos or/and memorabilia that can be used in the Class Book or onsite reunion activities</h5>
                    <h5><input class="extraService" type="checkbox" value="extraService">I don't know yet, but I'd like to help in some way so please contact me</h5>
                </div>
            </div>
        </li>
        <li style="height: 180px" class="list-group-item">
            <div class="col-xs-7">
                <label>I'd also like to help plan a Mini-Reunion:</label>
                <p class="warning">(I want to see friends from my freshman dorm, overseas campus, greek organization, performance group, etc.)</p>
                <div class="checkbox">
                    <h5><input class="extraHelp" type="checkbox" value="IAG">Yes, I know who I want to gather and am ready to receive a contact list of my group members early</h5>
                    <h5><input class="extraHelp" type="checkbox" value="NOT_READY">I'm not ready now, but contact me later this year</h5>
                    <h5><input class="extraHelp" type="checkbox" value="WANNA_KNOW">I'd like to learn more about Mini-Reunions</h5>
                </div>
            </div>
        </li>
        <li style="height: 80px" class="list-group-item">
            <button data-year="<?php echo $year;?>" data-id="<?php echo $uid;?>" class="btn btn-danger submit">Submit</button>
        </li>
    </ul>
</div>
</body>
</html>
