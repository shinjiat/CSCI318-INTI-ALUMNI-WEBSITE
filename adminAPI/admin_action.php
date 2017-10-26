<?php
require_once ('../db/dbconfig.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['submit'])) {
    	$adminUsername = $_POST['adminUsername'];
   	    $adminPassword = $_POST['adminPassword'];

   	    $query = "SELECT uname, upass FROM admin";

		$result = $dbconfig->query($query);


		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "FROM DATABASE ** : Username: " . $row["uname"]. " - Password: " . $row["upass"];
		    }
		} else {
		    echo "0 results";
		}
		echo '<br><br>';




   	    $query = "SELECT * FROM admin WHERE uname = '". $adminUsername ."' AND upass = '". $adminPassword ."'" ;

		$result = mysqli_query($dbconfig, $query);

		if (mysqli_num_rows($result) == 1) {
			header('Location: admin_panel.php');exit();
		} else {
			$Message = "Incorrect username or password!";
			header("Location: http://intialumni.16mb.com/adminAPI/admin.php?Message=" . urlencode($Message));
			
			// echo '<script type="text/javascript">alert("Incorrect username or password!");</script>';
			// header('Location: http://intialumni.16mb.com/admin.php');exit();
		//Fail
		}







    }
}



?>