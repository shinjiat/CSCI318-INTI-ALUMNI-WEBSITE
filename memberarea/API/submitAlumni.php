<?php
require_once ('../../db/dbconfig.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $qone = htmlspecialchars($_POST['qone']);
    $qtwo = $_POST['qtwo'];
    $qthree = $_POST['qthree'];
    $uid = $_POST['uid'];

    try{
        $query = mysqli_query($dbconfig,"insert into alumni (uid,qone,qtwo,qthree) values ('$uid','$qone','$qtwo','$qthree')");
        if($query){
            $arr = array(
                'message'=>'Form successfully submitted',
                'key'=>'1'
            );
            echo json_encode($arr);
        }else{
            $arr = array(
                'message'=>'Something went wrong. Please try again later',
                'key'=>'0'
            );
            echo json_encode($arr);
        }
    }catch (mysqli_sql_exception $exception){
        $arr = array(
            'message'=>$exception,
            'key'=>'0'
        );
        echo json_encode($arr);
    }
}