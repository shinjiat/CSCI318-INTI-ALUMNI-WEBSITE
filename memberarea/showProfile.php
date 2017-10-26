<!DOCTYPE html>
<html>
<head>
    <?php include ('header.php'); ?>

</head>
<body>

<?php
session_start();
  include('../db/dbconfig.php');
  ?>

    <!--sub-heard-part-->
    <div class="sub-heard-part">
     <ol class="breadcrumb m-b-0">
      <li><a href="index.php">Home</a></li>
      <li class="active">Profile</li>
    </ol>
     </div>
    <!--//sub-heard-part-->
    <!--/profile-->
    <h3 class="sub-tittle pro">Profile</h3>

      <!-- main jobs state -->
      <?php
      include ('../db/dbconfig.php');
      $id = $_SESSION['globalID'];
      $sql = mysqli_query($dbconfig, "Select * from _user WHERE id ='$id'");
      while($r = mysqli_fetch_array($sql)) {
          $picture = 'http://intialumni.16mb.com/memberarea' . $r['picture'];
          $full_name = $r['fname'] . " " . $r['lname'];
          $phone = $r['phone'];
          $country = $r['country'];
          $email = $r['email'];
          $language1 = $r['language1'];
          $language2 = $r['language2'];
          $biography = $r['biography'];
          $office = $r['office'];
      };
      echo'
         <div class="profile-widget" style="background-color:red">
            <img src='.$picture.' alt=" " />
            <h2>'.$full_name.'</h2>
            <p></p>
          </div>

            <!--/profile-inner-->
             <div class="profile-section-inner">
                   <div class="col-md-6 profile-info">
                  <h3 class="inner-tittle">Personal Information</h3>
                  <div class="main-grid3">
                     <div class="p-20">
                    <div class="about-info-p">
                      <strong>Full Name</strong>
                      <br>
                      <p class="text-muted">'.$full_name.'</p>
                    </div>
                    <div class="about-info-p">
                      <strong>Mobile</strong>
                      <br>
                      <p class="text-muted">'.$phone.'</p>
                    </div>
                    <div class="about-info-p">
                      <strong>Email</strong>
                      <br>
                      <p class="text-muted"><a href='.$email.'>'.$email.'</a></p>
                    </div>
                    <div class="about-info-p m-b-0">
                      <strong>Location</strong>
                      <br>
                      <p class="text-muted">'.$country.'</p>
                    </div>
                  </div>
                 </div>
                 <h3 class="inner-tittle">Biography </h3>
                <div class="main-grid3 p-skill">
                  <p></p>
                  <p class="para">'.$biography.'</p>
                </div>
                <h3 class="inner-tittle two">Skills </h3>
                  <div class="main-grid3">
                        <div class="bar">
                      <p>UI/UX</p>
                    </div>
                      <div class="skills">
                         <div class="skill1" style="width:90%"> </div>
                      </div>
                        <div class="bar">
                          <p>HTML / CSS3 / SASS</p>
                        </div>
                      <div class="skills">
                         <div class="skill2" style="width:90%"> </div>
                      </div>
                        <div class="bar">
                          <p>Javascript</p>
                        </div>
                      <div class="skills">
                         <div class="skill3" style="width:75%"> </div>
                      </div>
                      <div class="bar">
                          <p>Wordpress</p>
                        </div>
                      <div class="skills">
                         <div class="skill4" style="width:85%"> </div>
                      </div>
                    </div>
                </div>
                 <div class="col-md-6 profile-info two">
                 <h3 class="inner-tittle">Activity </h3>
                <div class="main-grid3 p-skill">

                    <ul class="timeline">

                      <li>
                        <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
                        <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="timeline-title"><a href="profile.php">Languages</a></h4>
                        </div>
                        <div class="timeline-body">
                         <p>Enter the Languages from the database</p>
                        </div>
                        </div>
                      </li>

                      <li>
                        <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
                        <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="timeline-title"><a href="profile.php">Language -2</a></h4>
                        </div>
                        <div class="timeline-body">
                          <p>Uploaded 2 new Photos</p>
                        </div>
                        </div>
                      </li>



                      <li>
                        <div class="timeline-badge danger"><i class="fa fa-times-circle-o"></i></div>
                        <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="timeline-title"><a href="profile.php">Jasmin Leo</a></h4>
                        </div>
                        <div class="timeline-body">
                           <p class="time">10 Minutes ago</p>
                          <p>Uploaded 5 new Photos</p>
                        </div>
                        </div>
                      </li>

                      <li>
                        <div class="timeline-badge success"><i class="fa fa-check-circle-o"></i></div>
                        <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title"><a href="profile.php">Jasmin Leo</a></h4>
                        </div>
                        <div class="timeline-body">
                           <p class="time">15 Minutes ago</p>
                          <p>Uploaded 2 new Photos </p>
                        </div>
                        </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!--/map-->
              <div class="col-md-6 profile-info two">
                 <h3 class="inner-tittle two">My Office </h3>
                <div class="main-grid3 map">
                  <div class="gmap-info">
                                  <h4> <i class="fa fa-map-marker"></i> <b><a href="#" class="text-dark"></a></b></h4>
                                  <p>'.$office.'</p>
                                </div>

                  </div>


                  <!--//map-->
                </div>
                <div class="clearfix"></div>
              </div>';
?>


<script src="modify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
