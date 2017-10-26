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
session_start();
include('../db/dbconfig.php');
?>

<!-- main jobs state -->
<?php
include ('../db/dbconfig.php');
$id = $_SESSION['globalID'];
$sql = mysqli_query($dbconfig, "Select * from _user WHERE id ='$id'");
while($r = mysqli_fetch_array($sql)){
    $picture = 'http://intialumni.16mb.com/memberarea' . $r['picture'];
    $full_name = $r['fname'] . " " . $r['lname'];
    $phone = $r['phone'];
    $country = $r['country'];
    $email = $r['email'];
}

echo'
</div>
<div class="sub-heard-part">
								   <ol class="breadcrumb m-b-0">
										<li><a href="index.php">Home</a></li>
										<li class="active">Carrer-Service</li>
									</ol>
								   </div>



								  <!--//sub-heard-part-->
									<div class="graph-visual">
												<h2 class="inner-tittle">Job Search</h2>
														 <!--/gallery-->
														 <div class="gallery">
																<div class="gallery-bottom grid">


																	<div class="card text-center">
																	  <div class="card-header">
Job Search
</div>
																	  <div class="card-block">
																	    <h4 class="card-title">INTI Job Search Bar</h4>
																			<div class="container">
																				<div class="row">
																					<div class="col-md-12">
																						<div class="container">
																						  
																						    <div class="input-group">
																						      <input id="profession" type="text" autocomplete="off" class="form-control" placeholder="Choose a Profession" name="search"/>
                                                                                                <div class="result"></div>
                                                                                                <select id="experience" class="form-control">
                                                                                                <option value="">Enter Experience Level</option>
                                                                                                <option value="1">1 year</option>
                                                                                                <option value="2">2 years</option>
                                                                                                <option value="3">3 years</option>
                                                                                                <option value="4">4 years</option>
                                                                                                <option value="5">5 years</option>
                                                                                                </select>
																						        <button class="fa fa-search" id="search" name="search" onclick="showCards()"></button>
																						     </div>
																						  
																						</div>
																			     </div>
																			        </div>
																				</div>
																			</div>
																	  </div>
																	  <div class="card-footer text-muted">
                                                                        INTI International College Subang 2017
                                                                        </div>

																	</div>


																		<div class="card-columns" id="card-columns" style="margin-top:2%">
																			<!-- enter research pub-->
																			

																		<div class="clearfix"> </div>
																	</div>
																</div>
															</div>


													 <!--//gallery-->
													 

											</div>';



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
