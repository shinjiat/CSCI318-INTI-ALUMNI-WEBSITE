<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 14/06/2017
 * Time: 21:43
 */
include ('../db/dbconfig.php');
session_start();
$id = $_SESSION['globalID'];

$workshop_id = intval($_GET['q']);

$sql = mysqli_query($dbconfig, "insert into workshop_member values($workshop_id,$id)");

if($sql){
    echo '        <div class="alert alert-success">
                                                <strong>Success!</strong> You have successfully registered.
                                            </div>';

}
else{
    echo '        <div class="alert alert-info">
  <strong>Info!</strong> You are already registered.
</div>';
}
?>

</body>
</html>
