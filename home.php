<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="image/icon-logo.png" type="image/icon-logo.png" sizes="16x16">
<title>INTI ALUMNI Website</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css.map" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.3/less.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.15/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.15/angular-animate.js"></script>
<!-- //js -->
<!-- gallery -->
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>

<style type="text/css">
 .hide{
   display: none;
 }
 .show{
   display: block;
 }
 </style>

<?php
include ('./db/dbconfig.php');
session_start();
$id = $_SESSION['globalID'];

if (isset($_SESSION['globalID'])){
   $sql = mysqli_query($dbconfig, "Select username from _user WHERE id ='$id'");

    while($row = mysqli_fetch_array($sql)){
     echo 'You are logged in as ' . $row["username"];
   }

}

?>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html"><span><img src="images/logo.png" alt="Inti International College Subang" style="width:300px;height:35px;"></span>  Alumni</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-3" id="link-effect-3">
						<ul class="nav navbar-nav w3-agileits_home_nav">
							<li class="active">
								<a class="link link--yaku" href="home.php">
									<span>H</span><span>o</span><span>m</span><span>e</span>
								</a>
							</li>
							<li>
								<a class="link link--yaku scroll" href="#gallery">
									<span>Rea</span><span>sea</span><span>rch</span><span>&</span><span>Pub</span><span>licat</span><span>ion</span>
								</a>
							</li>
							<li>
								<a class="link link--yaku scroll" href="#mail">
									<span>con</span><span>tact</span><span> u</span><span>s</span>
								</a>
							</li>

              <?php
              include ('dbconfig.php');
              session_start();
              if (isset($_SESSION['globalID'])){
                //show logout
                echo '<li class="show" id="logout">
                <a href="./db/logout.php">
									<span>Logout</span>
								</a>
							</li>';
              //show dasboard
              echo'
              <li class="active" id="dashboard">
                <a class="link link--yaku" href="./memberarea/index.php"">
                  <span>Dashboard</span>
                </a>
              </li>';
              }
              else{
                echo'
                <li class="active" id="member_area">
                  <a class="link link--yaku" href="#login" data-toggle="modal" data-target="#myModal">
                    <span>Mem</span><span>ber</span><span> Ar</span><span>ea</span>
                  </a>
                </li>';

              }
                  ?>
						</ul>
					</nav>
				</div>
			</nav>
      <!-- LOGIN POPUP -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Page</h4>
        </div>
        <div class="modal-body">
          <form class="modal-content animate" method="post" action="./db/login.php">

                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                              <input type="text" class="form-control" placeholder="Username" name="username" required/>
                          </div>
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                              <input type="password" class="form-control" placeholder="Password" name="password" required/>
                          </div>
                            <div class="form-group has-feedback has-feedback-left">
                            <br/>
                          <button type="submit" name="submit" class="btn purple pull-right" onclick="show_logout()">
                                          Login <i class="form-control-feedback"></i>
                            </button>
                            <br/>
                            </div>
                            <hr/>
                            <div class="forget-password">
                                <h4>Don't have an account yet?</h4>
                                <p>
                                    Contact Info@inti.com to create an account </p>
                                </form>
                            </div>

        </div>

      </div>

    </div>
  </div>
  <!-- Signup popup -->
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="reloadPage()">&times;</button>
          <h4 class="modal-title">Signup Page</h4>
        </div>
        <div class="modal-body">
          <form class="modal-content animate" method="post" action="./db/signup.php">
                          <div class="form-group has-feedback has-feedback-left">
                              <label class="control-label">Username</label>
                              <input type="text" class="form-control" placeholder="Username" name="username" required/>
                              <i class="form-control-feedback fa fa-user"></i>
                          </div>
                          <div class="form-group has-feedback has-feedback-left">
                              <label class="control-label">Password</label>
                              <input type="password" class="form-control" placeholder="Password" name="password" required/>
                              <i class="form-control-feedback fa fa-lock"></i>
                          </div>
                          <div class="form-group has-feedback has-feedback-left">
                              <label class="control-label">Confirm Password</label>
                              <input type="password" class="form-control" placeholder="Password" name="conpassword" required/>
                              <i class="form-control-feedback fa fa-lock"></i>
                          </div>
                            <div class="form-group has-feedback has-feedback-left">
                            <br/>
                          <button type="submit" name="submit" class="btn purple pull-right">
                                          Signup <i class="form-control-feedback"></i>
                            </button>
                            <br/>
                            </div>
            </form>
        </div>

      </div>

    </div>
  </div>

<!-- CLOSE -->
			<div class="w3layouts_banner_info">
				<section class="wrapper agileits-w3layouts_wrapper_home">
					<h2>Proud to Become INTIAN'S</h2>
					<div class="sentence">
						<div class="popEffect">
							<span>Congratulation</span>
							<span>Proud</span>
							<span>INTI</span>
							<span>ALumni</span>
						</div>
					</div>
				</section>
				<div class="w3layouts_banner_info_agileits_w3layouts">
					<div class="w3layouts_banner_info_right">
						<ul>
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div id="about" class="banner-bottom">
		<div class="container">
			<div class="col-md-7 w3_agileits_banner_bottom_left">
				<img src="images/1.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-3 w3_agileits_banner_bottom_right">
				<div class="w3_agileits_banner_bottom_right_pos">
					<h3>About Us</h3>
					<h4>Learning in a Whole New Way</h4>
					<p>The best kind of education is one that will empower you for life. More than the degree, it should enrich you with the right skills and attributes to excel at whatever you do, wherever you go.</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- banner-text -->
	<div class="banner-text w3-agile-banner-text">
		<div class="container">
			<h3>Education is the most powerful weapon which you can use to change the world</h3>
		</div>
	</div>
<!-- //banner-text -->
<!-- services -->
	<div class="services" id="services" style="top:-10%">
		<div class="container">
			<h3 class="wthree_head"><i class="fa fa-book" aria-hidden="true"></i><span>INTI ALuminai Website</span><br>Services Provided</h3>
			<div class="agileinfo_services_grids">
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href="memberprofile.php">
						<h4>Member's Profile</h4>
					</a>
					</div>
					<div class="agileinfo_services_grid_right">
						<h4>01.</h4>
					</div>
					<div class="clearfix"> </div>
					<p>Student can enter the information about them and search about the member.</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<h4>Event and Activites</h4>
					</div>
					<div class="agileinfo_services_grid_right">
						<h4>02.</h4>
					</div>
					<div class="clearfix"> </div>
					<p>Staff are permitted to enter the events, registered people will appear in the page.</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<h4>Carrer Development</h4>
					</div>
					<div class="agileinfo_services_grid_right">
						<h4>03.</h4>
					</div>
					<div class="clearfix"> </div>
					<p>Staff able to post about job and students able to check about their job.</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<h4>Research & Publication</h4>
					</div>
					<div class="agileinfo_services_grid_right">
						<h4>04.</h4>
					</div>
					<div class="clearfix"> </div>
					<p>staff of INTI and Partnering Companies and review the contents posted</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<h4>Social Media Network</h4>
					</div>
					<div class="agileinfo_services_grid_right">
						<h4>05.</h4>
					</div>
					<div class="clearfix"> </div>
					<p>students able to create their own batch group and admin able to delete and remove the content from the website</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<h4>Recommand & Pathway</h4>
					</div>
					<div class="agileinfo_services_grid_right">
						<h4>06.</h4>
					</div>
					<div class="clearfix"> </div>
					<p>INTI old students are encoruages to follow masters or research prorgams at INTI college subang</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- team -->
	<div class="team">
		<div class="container">
			<h3 class="wthree_head wthree_head1"><i class="fa fa-users" aria-hidden="true"></i><span>Graduate</span>Team</h3>
			<div class="agileits_team_grids">
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/1.png" alt=" " class="img-responsive" />
					</div>
					<div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<h4>Jane Nguyen <span>Staff</span></h4>
					<p>Include a Basic Sucess storeies</p>
				</div>
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/3.png" alt=" " class="img-responsive" />
					</div>
					<div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<h4>James Doe <span>Staff</span></h4>
					<p>Morbi non elit sed neque rhoncus maximus ac at enim.
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/2.png" alt=" " class="img-responsive" />
					</div>
					<div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<h4>Laura Carl <span>Staff</span></h4>
					<p>Morbi non elit sed neque rhoncus maximus ac at enim.
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- gallery -->
	<div id="gallery" class="gallery_main">
		<div class="container">
			<h3 class="wthree_head"><i class="fa fa-picture-o" aria-hidden="true"></i><span>ALumnai</span>Research & Publication</h3>
			<div class="w3l_gallery_grids">
				<ul class="w3l_gallery_grid gallery" id="lightGallery">

					<!-- For each from database untill 9 content -->
          <?php
          include ('./db/dbconfig.php');
          $sql_getprogram = mysqli_query($dbconfig,"select * from research");

            while($row = mysqli_fetch_array($sql_getprogram)){
              $title = $row['title'];
              $small_desc = $row['small_desc'];
              $full_desc = $row['full_desc'];
              $image = $row['image'];

              echo '<li data-title="'.$title.'" data-desc="'.$small_desc.'" data-src="'.$image.'" data-responsive-src="'.$image.'">
    						<div class="w3_w3l_gallery_grid box">
    							<a href="#">
    								<img src="'.$image.'" alt=" " class="img-responsive" />
    								<div class="caption scale-caption">
    									<h3>'.$title.'</h3>
    									<p>'.$small_desc.'</p>
    								</div>
    							</a>
                  </div>
                  </li>';
            }
          ?>

      <!-- For each from database -->

				</ul>
			</div>
		</div>
	</div>
	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //gallery -->
<!-- contact -->
	<div id="mail" class="contact">
		<div class="container">
			<h3 class="wthree_head"><i class="fa fa-envelope" aria-hidden="true"></i><span>Graduate</span>Mail Us</h3>
			<div class="w3layouts_mail_grids">
				<div class="col-md-5 w3layouts_mail_grid_left">
					<div class="w3_agile_contact_left">
						<ul>
							<li><img src="images/14.jpg" alt=" " class="img-responsive" /></li>
							<li><img src="images/15.jpg" alt=" " class="img-responsive" /></li>
							<li><img src="images/17.jpg" alt=" " class="img-responsive" /></li>
							<li><img src="images/18.jpg" alt=" " class="img-responsive" /></li>
							<li><img src="images/16.jpg" alt=" " class="img-responsive" /></li>
							<li><img src="images/19.jpg" alt=" " class="img-responsive" /></li>
						</ul>
					</div>
				</div>
				<div class="col-md-7 w3layouts_mail_grid_right">
					<form action="#" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
							<input type="text" name="Subject" placeholder="Subject" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea name="Message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Submit">
						<input type="reset" value="Clear">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0766837557285!2d101.58876771475715!3d3.0741921977613456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c5f8bdfaba7%3A0x31aac7ab1af0abc!2sINTI+International+College+Subang!5e0!3m2!1sen!2s!4v1494604674944" style="border:0"></iframe>
		<div class="agile_map_grid">
			<div class="agile_map_grid1">
				<h3>Contact Info</h3>
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><span>address :</span>3, Jalan SS 15/8, Ss 15, 47500 Subang Jaya, Selangor, Malaysia.</li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><span>email :</span> <a href="mailto:info@example.com">info@inti.edu.my</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><span>call to us :</span> (+60) 233 2362 826</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //contact -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileits_w3layouts_footer_grids">
				<div class="col-md-4 agileits_w3layouts_footer_grid">
					<h3>Call Us Now</h3>
					<ul>
						<li><span>Office Phone :</span> (+60) 2302 232</li>
						<li><span>Fax :</span> (+60) 123 456 455</li>
					</ul>
				</div>
				<div class="col-md-4 agileits_w3layouts_footer_grid">
					<h3>Address</h3>
					<p>3, Jalan SS 15/8, Ss 15,<i>47500 Subang Jaya, Selangor, Malaysia.</i></p>
				</div>
				<div class="col-md-4 agileits_w3layouts_footer_grid">
					<h3>send a message</h3>
					<ul>
						<li><span>Email :</span> <a href="mailto:info@example.com">info@inti.edu.my</a></li>
						<li><span>Enquiry :</span> <a href="mailto:info@enquiry.com">enquiry@inti.edu.my.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_agileits_footer_grids">
				<div class="col-md-4 w3_agileits_footer_grid">
					<h3>Hours Work</h3>
					<h4>Alunmnai can contact</h4>
					<ul>
						<li><span>Mon - Fri : </span> 9:00 AM to 5:00PM</li>
					</ul>
				</div>
				<div class="col-md-4 w3_agileits_footer_grid">
					<h3>Subscribe Now</h3>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="wthree_copy_right">
		<div class="container">
			<p>© 2017 INTI International College Subang. All rights reserved | Design by Kuhandran SamudraPandiyan</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script>
            function hideStuff(value)
            {
                document.getElementById(value).style.display = 'none';
                console.log(value);

            }

            function show_logout()
            {
               document.getElementById('member_area').style.display ='none';
               document.getElementById('logout').style.display ='block';
            }

            function reloadPage()
            {
              location.reload();
            }
          </script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
