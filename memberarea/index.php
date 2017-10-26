
<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard</title>
    <?php include ('header.php'); ?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">

            $(document).on("keyup input",".input-group input[id='profession']", function(){
                /* Get input value on change */
                console.log('in');
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if(inputVal.length){
                    $.get("backend-search.php", {term: inputVal}).done(function(data){
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else{
                    resultDropdown.empty();
                }
            });
            // Set search input value on click of result item
            $(document).on("click", ".result p", function(){
                $(this).parents(".input-group").find('input[id="profession"]').val($(this).text());
                $(this).parent(".result").empty();
            });

    </script>

</head>

<?php
include ('./db/dbconfig.php');
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

									 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by Kuhandran SamudraPandiyan</p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->



				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="../home.php"> <span id="logo"> <h1>INTI</h1></span>
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
										<li id="menu-academico" ><a href="#profile" onclick="showProfile('test')"><i class="fa fa-table"></i> <span>Profile</span></a></li>
										<li id="menu-academico" ><a href="#editprofile" onclick="editProfile('test')"><i class="fa fa-file-text-o"></i> <span>Edit Profile</span></a></li>
                                        <li id="menu-academico" ><a href="#workshop" onclick="showWorkshop('test')"><i class="fa fa-file-text-o"></i> <span>Workshops</span></a></li>
                                        <li id="menu-academico" ><a href="#career" onclick="showCareer('test')"><i class="fa fa-file-text-o"></i> <span>Career Service</span></a></li>
                                        <li id="menu-academico" ><a href="#research" onclick="showResearch('test')"><i class="fa fa-file-text-o"></i> <span>Research Publications</span></a></li>
                                        <li id="menu-academico" ><a href="showReunion.php"><i class="fa fa-file-text-o"></i> <span>Reunion & Alumni Sharing</span></a></li>
                                        <li id="menu-academico" ><a href="chat/index.php"><i class="fa fa-file-text-o"></i> <span>Group Chat</span></a></li>
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

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   <script>
   function showProfile(str) {
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
   function showCareer(str) {
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
           xmlhttp.open("GET","showCareer.php?q="+str,true);
           xmlhttp.send();
       }
   }

   function showResearch(str) {
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
           xmlhttp.open("GET","showResearch.php?q="+str,true);
           xmlhttp.send();
       }
   }

   function registerWorkshop(str) {
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
           xmlhttp.open("GET","registerWorkshop.php?q="+str,true);
           xmlhttp.send();
       }
   }

   function showCards() {
       console.log('show cards');
       var profession = document.getElementById('profession').value;
       var experience = document.getElementById('experience').value;

       if(profession == "" || experience=="") {
           alert("Please Select A Date To Search From");
           return;
       }
       $.ajax({
           type  : 'GET',
           url  : 'showJobs.php',
           data : {pt:'7',prof:profession, exp:experience},
           success: function (data) {
               document.getElementById('card-columns').innerHTML = data;
           }
       });
   }

   function showJobinfo() {
       console.log('show job info');
       var jobid = document.getElementById('job_id').innerHTML;
       console.log(jobid);

       if(jobid == "") {
           alert("Please Select A Date To Search From");
           return;
       }
       $.ajax({
           type  : 'GET',
           url  : 'showJobinfo.php',
           data : {pt:'7',job:jobid},
           success: function (data) {
               document.getElementById('outter-wp').innerHTML = data;
           }
       });
   }

   function showResearchinfo() {
       console.log('show research info');
       var researchid = document.getElementById('research_id').innerHTML;

       if(researchid == "") {
           alert("Please Select A Date To Search From");
           return;
       }
       $.ajax({
           type  : 'GET',
           url  : 'showResearchinfo.php',
           data : {pt:'7',research:researchid},
           success: function (data) {
               document.getElementById('outter-wp').innerHTML = data;
           }
       });
   }
   function call() {
     alert("Your Sucessfully Applied For Job");
   }

</script>
</body>

</html>
