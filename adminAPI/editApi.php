<?php
/**
 * Created by PhpStorm.
 * User: julfi
 * Date: 14/06/2017
 * Time: 10:28 PM
 */
require_once ('../db/dbconfig.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
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

    $extensions = array("jpeg","jpg","png");

    for($i = 0; $i < 4; $i++){
        $temp_sk = $skill[$i];
        $temp_rate = $rate[$i];
        mysqli_query($dbconfig,"insert into _skill (uid,rate,skill) values ('$id','$temp_sk','$temp_rate')");
    }

    $update = mysqli_query($dbconfig,"update _user set fname='$fname',lname='$lname',phone='$phone',email='$email',country='$country',language1='$langOne',language2='$langTwo',language3='$langThree',biography='$bio',office='$office',position='$pos',dob='$dob' where id='$id'");

    if($update){
        $arr = array(
            'message'=>'Edited Successfully',
            'key'=>'1'
        );
        echo json_encode($arr);
    }else{
        $arr = array(
            'message'=>'Something went wrong.Please try again',
            'key'=>'0'
        );
        echo json_encode($arr);
    }
}