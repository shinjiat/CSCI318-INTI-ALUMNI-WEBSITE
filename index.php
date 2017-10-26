<?php
session_start();

$user = $_SESSION['globalID'];

header("location:home.php");


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <link href="css/style.css" rel="stylesheet"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>INTI ALUMNI</title>
</head>

<body>
</body>
<?php include ('footer.php');?>
</html>
