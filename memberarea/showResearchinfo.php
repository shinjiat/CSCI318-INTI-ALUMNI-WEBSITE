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

$research_id = $_GET['research'];

$id = $_SESSION['globalID'];
$sql = mysqli_query($dbconfig, "Select * from research where id=$research_id");
if($sql) {
    while ($r = mysqli_fetch_array($sql)) {
        $research_id = $r['id'];
        $title = $r['title'];
        $small_desc = $r['small_desc'];
        $full_desc = $r['full_desc'];
        $image = $r['image'];



        echo '
       <!--sub-heard-part-->
								   <div class="sub-heard-part">
								   <ol class="breadcrumb m-b-0">
										<li><a href="index.php">Home</a></li>
										<li class="active">Research Information</li>
									</ol>
								   </div>
								  <!--//sub-heard-part-->
								<div class="graph-visual">
											<h2 class="inner-tittle"> Research Information </h2>



                      <div class="card card-inverse" style="background-color: #333; border-color: #333; height: 10rem;">
                          <div class="card-block">
                            <h3 class="card-title"> <img src="'.$image.'" style="width:80px;height:80px">
                              '.$title.'</h3>
                            <p class="card-text">'.$small_desc.'</p>
                          </div>
                          </div>
                           <div class="card" style="padding-left:5%">
                              <div class="card-block">
                                <h4 class="card-title">'.$title.'</h4>
                                <p class="card-text">'.$full_desc.'</p>
                                <p class="card-text"><small class="text-muted">All Rights Reserverd : INTI</small></p>
                              </div>
                           </div>
                           <div class="clearfix"> </div>
                         </div>


                                <div class="clearfix"> </div>
															</div>
														</div>

													 <!--//gallery-->

											</div>';

    }
}
else{
    echo 'SQL ERROR';
}
if(mysqli_num_rows($sql) == 0){
    echo 'No result' . $job_id;
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



