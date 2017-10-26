
<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--  Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>
<script src="js/serial.js"></script>
<script src="js/light.js"></script>
<script src="js/radar.js"></script>
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->

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
</head>

<?php
include ('../db/dbconfig.php');
session_start();
?>

<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
    <!--outter-wp-->
      <div class="outter-wp" id="outter-wp">

                    <!--//profile-inner-->
                <!--//profile-->
      </div>
           <div style="margin-bottom: 100px;" id="alumniform">

           </div>
           						 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved</p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->



				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>INTI</h1></span>
					<!--<img id="logo" src="" alt="Logo"/>-->
				  </a>
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">
                <?php
                include ('../db/dbconfig.php');
                $id = $_SESSION['globalID'];
                $sql = mysqli_query($dbconfig, "Select * from _user WHERE id ='$id'");
                while($r = mysqli_fetch_array($sql)){
                  $picture = 'http://intialumni.16mb.com/memberarea' . $r['picture'];
                  $full_name = $r['fname'] . " " . $r['lname'];
                }
									  echo '<a href="index.php"><img src='.$picture.'></a>
									  <a href="index.php"><span class=" name-caret">'.$full_name.'</span></a>
									 <p></p>
									<ul>
									<li><a class="tooltips" href="index.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="../db/logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>';
                    ?>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li id="menu-academico" ><a href="#" onclick="showProfile('test')"><i class="fa fa-table"></i> <span>Profile</span></a></li>
										<li id="menu-academico" ><a href="#" onclick="editProfile('test')"><i class="fa fa-file-text-o"></i> <span>Edit Profile</span></a></li>
                                        <li id="menu-academico" ><a href="#career" onclick="showCareer('test')"><i class="fa fa-file-text-o"></i> <span>Career Service</span></a></li>
                                        <li id="menu-academico" ><a href="#research" onclick="showResearch('test')"><i class="fa fa-file-text-o"></i> <span>Research Publications</span></a></li>
                                        <li id="menu-academico" ><a href="showReunion.php"><i class="fa fa-file-text-o"></i> <span>Reunion & Alumni Sharing</span></a></li>
            	  </ul>
								</div>
							  </div>


							  <div class="clearfix"></div>
							</div>
							<script>
							var toggle = true;

							$(".sidebar-icon").click(function() {
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }

											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="swal/sweetalert-dev.js"></script>
<script src="swal/sweetalert.min.js"></script>
<link rel="stylesheet" href="swal/sweetalert.css">
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <script>
   function showProfile(str) {
       hideIt();
     console.log("go in");
       if (str === "") {
           document.getElementById("outter-wp").innerHTML = "";
       } else {
           if (window.XMLHttpRequest) {
               // code for IE7+, Firefox, Chrome, Opera, Safari
               xmlhttp = new XMLHttpRequest();
           } else {
               // code for IE6, IE5
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
           }
           xmlhttp.onreadystatechange = function() {
               if (this.readyState === 4 && this.status === 200) {
                   document.getElementById("outter-wp").innerHTML = this.responseText;
               }
           };
           xmlhttp.open("GET","showProfile.php?q="+str,true);
           xmlhttp.send();
       }
   }

   function editProfile(str) {
       hideIt();
     console.log("go in");
       if (str === "") {
           document.getElementById("outter-wp").innerHTML = "";
       } else {
           if (window.XMLHttpRequest) {
               // code for IE7+, Firefox, Chrome, Opera, Safari
               xmlhttp = new XMLHttpRequest();
           } else {
               // code for IE6, IE5
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
           }
           xmlhttp.onreadystatechange = function() {
               if (this.readyState === 4 && this.status === 200) {
                   document.getElementById("outter-wp").innerHTML = this.responseText;
               }
           };
           xmlhttp.open("GET","editProfile.php?q="+str,true);
           xmlhttp.send();
       }
   }

   function showWorkshop(str) {
       hideIt();
     console.log("go in");
       if (str === "") {
           document.getElementById("outter-wp").innerHTML = "";
       } else {
           if (window.XMLHttpRequest) {
               // code for IE7+, Firefox, Chrome, Opera, Safari
               xmlhttp = new XMLHttpRequest();
           } else {
               // code for IE6, IE5
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
           }
           xmlhttp.onreadystatechange = function() {
               if (this.readyState === 4 && this.status === 200) {
                   document.getElementById("outter-wp").innerHTML = this.responseText;
               }
           };
           xmlhttp.open("GET","showWorkshop.php?q="+str,true);
           xmlhttp.send();
       }
   }
</script>

<!--CHIGGA RULES-->

<script src="API/API.js"></script>

<!--CHIGGA RULES-->
</body>
</html>
