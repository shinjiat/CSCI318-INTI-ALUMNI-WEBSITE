<?php

require_once ('../db/dbconfig.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $data = $_POST['data'];
    $name = $_POST['name'];
    $id = $_POST['id'];

    $img = $data;
    $img = str_replace('data:image/jpeg;base64,', '', $img);
    $img = str_replace('data:image/jpg;base64,', '', $img);
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $imgData = base64_decode($img);
    $path = '../memberarea/profiles/'.$name;
    $DBpath = '/profiles/'.$name;
    
    $finalPath = 'http://intialumni.16mb.com/'.$path;
    $finalPath = mysqli_real_escape_string($dbconfig,$finalPath);
    if(file_put_contents($path,$imgData)){
        $query = mysqli_query($dbconfig,"update _user set picture = '$DBpath' where id='$id'");
        if($query){
            $arr = array(
                'message'=>'Uploaded Successfully',
                'image'=>$finalPath,
                'key'=>'1'
            );
            echo json_encode($arr);
        }
    }else{
        $arr = array(
            'message'=>'Error uploading file. Try another image',
            'key'=>'0'
        );
        echo json_encode($arr);
    }
}