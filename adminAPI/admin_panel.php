
<!DOCTYPE HTML>
<html>
<head>


<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../memberarea/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../memberarea/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../memberarea/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- //lined-icons -->
<script src="../memberarea/js/jquery-1.10.2.min.js"></script>
<script src="../memberarea/js/amcharts.js"></script>
<script src="../memberarea/js/serial.js"></script>
<script src="../memberarea/js/light.js"></script>
<script src="../memberarea/js/radar.js"></script>
<link href="../memberarea/css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="../memberarea/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="../memberarea/js/skycons.js"></script>

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
<script src="/memberarea/swal/sweetalert-dev.js"></script>
<script src="/memberarea/swal/sweetalert.min.js"></script>
<link rel="stylesheet" href="/memberarea/swal/sweetalert.css">
<link rel="stylesheet" type="text/css" href="style.css">
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
    <!--outter-wp-->
      <div class="container">
          <div class="outter-wp" id="outter-wp">

              <!--//profile-inner-->
              <!--//profile-->
          </div>
          <div class="outter-wp">
              <div id="searchBar" hidden class="row">
                  <div class="col-md-6">
                      <h2>Delete User</h2>
                      <div style="height: 60px" id="custom-search-input">
                          <div class="input-group col-md-12">
                              <input type="text" class="form-control input-lg" placeholder="Username" id="searchText"/>
                              <span class="input-group-btn">
                        <button id="searchSubmit" class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                          </div>
                      </div>
                  </div>
              </div>

              <div id="searchBarEdit" hidden class="row">
                  <div class="col-md-6">
                      <h2>Edit User</h2>
                      <div style="height: 60px" id="custom-search-input">
                          <div class="input-group col-md-12">
                              <input type="text" class="form-control input-lg" placeholder="Username" id="editText"/>
                              <span class="input-group-btn">
                        <button id="editSubmit" class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                          </div>
                      </div>
                  </div>
              </div>

              <form action="addworkshop.php" method="post">
                <input type="hidden" name="do" value="login">
                <div class="hide" id="workshop-div"><h3 style="color:white">Workshop Details</h3>
                    <div class="list-group-item">
                        <input type="text" name="title" placeholder="Title" class="form-control no-border" required><br/>
                        <input type="text" name="date" placeholder="Date" class="form-control no-border" required><br/>
                        <input type="text" name="slot" placeholder="Slot" class="form-control no-border" required><br/>
                        <textarea rows="4" cols="50" id="content" placeholder="About Workshop"></textarea>
                        <input type="submit" name="submit_workshop" id="submit_workshop" class="btn btn-lg btn-danger btn-block"></button>
                    </div>
                </div>
            </form>



              <div id="addWorkShopForm" hidden class="row">
                  <div class="col-md-6">
                      <h2>Add Workshop</h2>
                      <div style="height: 60px" id="custom-search-input">
                          <div class="input-group col-md-12">


              <form action="addworkshop.php" method="post">
                <input type="hidden" name="do" value="login">
                <div class="hide" id="workshop-div"><h3 style="color:white">Workshop Details</h3>
                    <div class="list-group-item">
                        <input type="text" name="title" placeholder="Title" class="form-control no-border" required><br/>
                        <input type="text" name="date" placeholder="Date" class="form-control no-border" required><br/>
                        <input type="text" name="slot" placeholder="Slot" class="form-control no-border" required><br/>
                        <textarea rows="4" cols="50" id="content" placeholder="About Workshop"></textarea>
                        <input type="submit" name="submit_workshop" id="submit_workshop" class="btn btn-lg btn-danger btn-block"></button>
                    </div>
                </div>
            </form>


                              <span class="input-group-btn">
                        <button id="editSubmit" class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                          </div>
                      </div>
                  </div>
              </div>



          </div>
          <div style="margin-bottom: 100px;margin-left: 35px" id="pan">

          </div>
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
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="admin_panel2.php"> <span id="logo"> <h1>INTI</h1></span>
					<!--<img id="logo" src="" alt="Logo"/>-->
				  </a>
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">
            <img src="http://www.virtual-administration.com/wp-content/uploads/2016/02/Admin-resized-2.jpg" alt="Smiley face" height="80" width="220">
									</div>
							   <!--//down-->
									<ul id="menu" >

                      <li id="menu-academico" ><a href="#" id="addUser"onclick="addUser('test')" >
                      <i class="fa fa-file-text-o"></i> <span>Add User</span></a></li>

  										<li id="menu-academico" ><a href="#" id="deleteUser">
  										<i class="fa fa-file-text-o"></i> <span>Delete User</span></a></li>

                      <li id="menu-academico" ><a href="#" id="editUser"><i class="fa fa-file-text-o"></i> <span>Edit User</span></a></li>

<!--                       <li id="menu-academico" ><a href="#" id="addWorkshop"onclick="showWorkshop('test')" >
                      <i class="fa fa-file-text-o"></i> <span>Add Workshop</span></a></li>

                      <li id="menu-academico" ><a href="#" id="addWorkshop"onclick="addResearch('test')" >
                      <i class="fa fa-file-text-o"></i> <span>Add Research</span></a></li> -->
                      <!---<li id="menu-academico" ><a href="validation.php"><i class="fa fa-file-text-o"></i> <span>Carrer Service</span></a></li>
                      <li id="menu-academico" ><a href="project.php"><i class="fa fa-file-text-o"></i> <span>Research Publications</span></a></li>
                      <li id="menu-academico" ><a href="validation.php"><i class="fa fa-file-text-o"></i> <span>Social Media</span></a></li> -->
            	  </ul>
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
<link rel="stylesheet" href="../memberarea/css/vroom.css">
<script type="text/javascript" src="../memberarea/js/vroom.js"></script>
<script type="text/javascript" src="../memberarea/js/TweenLite.min.js"></script>
<script type="text/javascript" src="../memberarea/js/CSSPlugin.min.js"></script>
<script src="../memberarea/js/jquery.nicescroll.js"></script>
<script src="../memberarea/js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="../memberarea/js/bootstrap.min.js"></script>
   <script>
   function addUser(str) {
       document.getElementById("pan").innerHTML = "";
     $('#pan').hide();
     $('#outter-wp').show(1000);
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
           xmlhttp.open("GET","addUser.php",true);
           xmlhttp.send();
       }
   }


   function editProfile(str) {
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
           xmlhttp.open("GET","deleteUser.php",true);
           xmlhttp.send();
       }
   }

   function showWorkshop(str) {
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
           xmlhttp.open("GET","showAddWorkshop.php?q="+str,true);
           xmlhttp.send();
       }
   }
</script>
<!--ONLY CHIGGA IS REAL-->
   <script src="script.js"></script>
<!--ONLY CHIGGA IS REAL-->
</body>
</html>
