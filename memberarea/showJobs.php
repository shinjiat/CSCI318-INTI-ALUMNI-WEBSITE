<!DOCTYPE html>
<html>
<head>
    <?php include ('header.php'); ?>

    <link rel="SHORTCUT ICON" href="images/logo.png" />

    <!--Bootstrap designs -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/modernizr.custom.04022.js"></script>
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
    <!--light-box-files -->
    <script type="text/javascript">

        $(function() {
            $('.gallery-bottom a').Chocolat();
        });

    </script>
    <style>
        .result{
            position: absolute;
            z-index: 999;
            top: 70%;
            left: 0;
        }
        .input-group input[type="text"], .result{
            width: 30%;
            box-sizing: border-box;
        }
        /* Formatting result items */
        .result p {
            margin: 0;
            padding: 1px;
            border: 1px solid darkgreen;
            border-top: 1px solid darkgreen;
            cursor: pointer;
            background: whitesmoke;
        }
        .result p:hover{
            background: #f2f2f2;
        }
    </style>

</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 15/06/2017
 * Time: 5:28
 */
session_start();
include ('../db/dbconfig.php');

$profession = $_GET['prof'];
$experience = $_GET['exp'];
$rangeType = $_GET['pt'];

$id = $_SESSION['globalID'];
$sql = mysqli_query($dbconfig, "Select j.id,j.title,j.content,j.experience,p.name,j.image from jobs j join profession p
                                       ON j.prof_id = p.id
                                       WHERE p.name = '$profession' && j.experience = $experience");
if($sql) {
    while ($r = mysqli_fetch_array($sql)) {
        $job_id = $r['id'];
        $title = $r['title'];
        $content = $r['content'];
        $experience = $r['experience'];
        $profession = $r['prof_id'];
        $image = $r['image'];

        echo '
        <!-- enter research pub-->
        <div class="card">
        <img class="card-img-top" src="'.$image.'" alt="Card image cap" style="height:250px;width:100%">
            <div class="card-block">
                <p style="display:none" id="job_id">' . $job_id . '</p>
                <h4 class="card-title">' . $title . '</h4>
                <p class="card-text">' . $content . '</p>
                <p class="card-text"><small class="text-muted"><a href="#" onclick="showJobinfo()">Read More .. .. .. </a></small></p>
            </div>
        </div>
        
        
        <div class="clearfix"> </div>';
    }
}
else{
    echo 'SQL ERROR';
}
if(mysqli_num_rows($sql) == 0){
    echo 'No result' . $experience . $profession;
}

?>

</body>

<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</html>



