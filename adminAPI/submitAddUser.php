<?php
require_once ('../db/dbconfig.php');


if($_SERVER['REQUEST_METHOD'] == "POST"){


    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $language1 = $_POST['language1'];
    $language2 = $_POST['language2'];
    $language3 = $_POST['language3'];
    $biography = $_POST['biography'];
    $office = $_POST['office'];
    $position = $_POST['position'];


echo 'username : ' . $username . '<br/>';
echo 'password : ' . $password . '<br/>';
echo 'fname : ' . $fname . '<br/>';
echo 'lname : ' . $lname . '<br/>';
echo 'phone : ' . $phone . '<br/>';
echo 'email : ' . $email . '<br/>';

echo 'country : ' . $country . '<br/>';
echo 'language1 : ' . $language1 . '<br/>';
echo 'language2 : ' . $language2 . '<br/>';
echo 'language3 : ' . $language3 . '<br/>';

echo 'biography : ' . $biography . '<br/>';
echo 'office : ' . $office . '<br/>';
echo 'position : ' . $position . '<br/>';

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
    echo '<br/>';
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
        echo "Uploaded [$file_name] to [$ftp_server] under directory of [/public_html/memberarea/profiles/]";
    }

// close the FTP stream
    ftp_close($conn_id);

    echo '<br><br><br>';
    echo '<u>Database update (path)</u><br>';
    $destination_file = "/profiles/" . $file_name;

    try{


        $query = mysqli_query($dbconfig,"insert into _user (username, password, fname, lname, phone, email, country, picture, language1, language2, language3, biography, office, position)  values ('$username', '$password', '$fname', '$lname', '$phone','$email','$country', '$destination_file','$language1','$language2','$language3','$biography','$office','$position')");
        if($query){
            $arr = array(
                'message'=>'Form successfully submitted',
                'key'=>'1'
            );
            //echo json_encode($arr);
            echo 'Data has been inserted into database successfully.';
        }else{
            $arr = array(
                'message'=>'Something went wrong. Please try again later',
                'key'=>'0'
            );
            //echo json_encode($arr);
            echo 'Something went wrong. Please try again later.';
        }
    }catch (mysqli_sql_exception $exception){
        $arr = array(
            'message'=>$exception,
            'key'=>'0'
        );
        echo json_encode($arr);
    }
}