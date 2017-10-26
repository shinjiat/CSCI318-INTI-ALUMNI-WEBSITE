<?php
session_start();
include('../db/dbconfig.php');
if (isset($_POST['submit_workshop'])){
    $title = test_input($_POST['title']);
    $date = test_input($_POST['date']);
    $slot = test_input($_POST['slot']);
    $content = test_input($_POST['content']);

    //insert into workshop
    $sql_getuid = mysqli_query($dbconfig,"Insert into workshop values('$title','$date',$slot,'$content')");

    if($sql){
        header("location:admin_panel2.php");
        $_SESSION['msg'] = "success";
    }
    else{
        header("location:admin_panel2.php");
        $_SESSION['msg'] = "error";
    }
}
else{
    header("location:admin_panel2.php");
    $_SESSION['msg'] = "error";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
