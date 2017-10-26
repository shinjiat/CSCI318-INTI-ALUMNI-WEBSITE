<?php

include ('../db/dbconfig.php');

if(isset($_GET['query'])){

    $query =  $_GET['query'];

    try{
        $query = mysqli_query($dbconfig,"select * from _user where username like '%$query%'");

        while($row = mysqli_fetch_array($query)){
            echo '
                    	<div style="width: 500px" class="row">
                            <div class="span4 well">
                                <div class="row">
                                
                                    <div class="span1"><a href="#" class="thumbnail"><img style="width: 100px;height:100px" src="/memberarea'.$row["picture"]. '" alt=""></a></div>
                                    <div class="span3">
                                        <p><strong>'.$row["fname"].'   '.$row["lname"].'</strong></p>
                                        <p><strong>'.$row["email"].'</strong> <strong>'.$row["phone"].'</strong></p>
                                        <button class="btn btn-danger delete" data-id="'.$row["id"].'">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                 ';
        }
    }catch (mysqli_sql_exception $exception){
        echo '
                <script>alert("'.$exception.'");</script>
             ';
        echo '
                <script>console.log("'.$exception.'")</script>
             ';
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];

    try{
        $query = mysqli_query($dbconfig,"delete from _user where id = '$id'");
        if($query){
            $arr = array(
                'message'=>'Successfully Deleted',
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
?>

