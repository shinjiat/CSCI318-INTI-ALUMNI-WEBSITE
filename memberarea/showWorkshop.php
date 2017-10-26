<!DOCTYPE html>
<html>
<head>
    <?php include ('header.php'); ?>

  <link rel="SHORTCUT ICON" href="images/logo.png" />

  <!--Bootstrap designs -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
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
      <li class="active">Workshops</li>
    </ol>
     </div>
    <!--//sub-heard-part-->
    <!--/profile-->

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

        echo '<div class="graph-visual">
              <h2 class="inner-tittle">Workshops</h2>
                   <!--/gallery-->
                   <div class="gallery">
                      <div class="gallery-bottom grid">

                        <div class="row">
                          <div class="col">Workshops';

      $sql = mysqli_query($dbconfig, "Select * from workshop");
      while($r = mysqli_fetch_array($sql)){
          $id = $r['id'];
          $title = $r['title'];
          $content = $r['content'];
          $date_event = $r['date_event'];
          $slot = $r['slot'];
          $image = $r['image'];

      echo '
                          <div class="card-group">
                            <div class="card">
                              <img class="card-img-top" src="'.$image.'" alt="Card image cap">
                              <div class="card-block">
                                <h4 class="card-title">'.$title.'</h4>
                                <p class="card-text">'.$content.'</p>
                              </div>
                              <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                                <a class="btn btn-success btn-small" href="#" style="float:right" onclick="registerWorkshop('.$id.')">
                                   <i class="fa fa-superpowers" aria-hidden="true">Register</i></a>
                              </div>
                            </div>
                          </div>';
      }
echo'
                          </div>
                          <div class="col">Career Service Facebook Page
                            <div class="fb-page" data-href="https://www.facebook.com/inticareerservices" data-tabs="timeline" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/inticareerservices" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/inticareerservices">INTI Career Services</a></blockquote></div>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Finticareerservices&tabs=timeline&width=500&height=800&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="800" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                          </div>
                        </div>
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
