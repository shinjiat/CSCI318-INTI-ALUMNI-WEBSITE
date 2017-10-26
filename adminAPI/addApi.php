<?php

require_once ('../db/dbconfig.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $pos = $_POST['pos'];
    $bio = htmlspecialchars($_POST['bio']);
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $office = htmlspecialchars($_POST['office']);
    $skill = $_POST['skill'];
    $rate = $_POST['rate'];
    $lang = $_POST['lang'];

    $langOne = $lang[0];
    $langTwo = $lang[1];
    $langThree = $lang[2];

    $path = $_POST['path'];

    $update = mysqli_query($dbconfig,"insert into _user (username,password,fname,lname,phone,email,country,picture,language1,language2,language3,biography,office,position,dob) values ('$user','$pass','$fname','$lname','$phone','$email','$country','$path','$langOne','$langTwo','$langThree','$bio','$office','$pos','$dob')");

    if($update){
        $ok = mysqli_query($dbconfig,"select * from _user where username='$user'");
        if($ok){
            $row = $ok->fetch_assoc();
            $id = $row['id'];

            for($i = 0; $i < 4; $i++){
                $temp_sk = $skill[$i];
                $temp_rate = $rate[$i];
                mysqli_query($dbconfig,"insert into _skill (uid,rate,skill) values ('$id','$temp_sk','$temp_rate')");
            }

            $arr = array(
                'message'=>$id,
                'key'=>'1',
            );
            echo json_encode($arr);
        }
    }else{
        $arr = array(
            'message'=>'Something went wrong.Please try again',
            'key'=>'0'
        );
        echo json_encode($arr);
    }
}
?>