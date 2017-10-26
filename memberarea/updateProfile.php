<?php
session_start();
include('../db/dbconfig.php');

$id = $_SESSION['globalID'];

$q = $_SESSION['current'];
//echo 'CHOSEN : ' . $q;

if (isset($_POST['submit_profile'])){
    $fname = test_input($_POST['fname']);
    $lname = test_input($_POST['lname']);
    $email = test_input($_POST['email']);
    $position = test_input($_POST['position']);
    $phone = test_input($_POST['phone']);
    $country = test_input($_POST['country']);
    $language1 = test_input($_POST['language1']);
    $language2 = test_input($_POST['language2']);
    $language3 = test_input($_POST['language3']);
    $biography = test_input($_POST['biography']);
    $office = test_input($_POST['office']);

    //upload to FTP
    $ftp_server = "ftp.intialumni.16mb.com";
    $ftp_user_name = "u610274116";
    $ftp_user_pass = "Onlyhostinger";
    $file_name = $_FILES["file"]["name"];
    $destination_file = "/public_html/memberarea/profiles/" . $file_name;
    $source_file = $_FILES['file']['tmp_name'];


// set up basic connection
    $conn_id = ftp_connect($ftp_server);
    ftp_pasv($conn_id, true);

// login with username and password
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
    echo '<u>Status for uploading image to FTP </u><br>';

// check connection
    if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        exit;
    } else {
        echo "Connected to ftp_server";
    }

    echo '<br>';
// upload the file
    $upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);


// check upload status
    if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded [$file_name] to [$ftp_server] under directory of [/public_html/map/]";
    }

// close the FTP stream
    ftp_close($conn_id);

    echo '<br><br><br>';
    echo '<u>Database update (path)</u><br>';
    $destination_file = "/profiles/" . $file_name;

    //insert into user table
        $sql = mysqli_query($dbconfig,
        "UPDATE _user
        set fname='$fname', lname='$lname', email ='$email', position='$position', country='$country', language1='$language1', language2='$language2',language3='$language3',
        biography='$biography', office='$office'
        where id ='$id'");

        if(!empty($file_name)){       //if user choose a file, then upload it
            $sql_picture = mysqli_query($dbconfig, "UPDATE _user set picture='$destination_file' where id= '$id'");
        }

        if($sql){
          header("location:index.php");
          $_SESSION['msg'] = "success";
        }
        else{
          header("location:404.php");
          $_SESSION['msg'] = "error";
        }

}
else{
  header("location:home.php");
  $_SESSION['msg'] = "error";
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>