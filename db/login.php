<?php
    session_start();
    include ("dbconfig.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $stripusername = stripslashes($username);
        $strippass  = stripslashes($password);

        $email = mysqli_real_escape_string($dbconfig, $stripusername);
        $password = mysqli_real_escape_string($dbconfig, $strippass);

      //  $sql="SELECT * FROM _user WHERE username='$stripusername' AND password='".md5($strippass,TRUE)."'";
        $sql="SELECT * FROM _user WHERE username='$stripusername' AND password='$strippass' ";
        $result=mysqli_query($dbconfig,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result) == 1)
        {
            $result=mysqli_query($dbconfig,$sql);
            $row = $result->fetch_assoc();
            $_SESSION['sid']=session_id();
            $id = $row['id'];
            $_SESSION['globalID'] = $id;
            $_SESSION['username'] = $username;
            header("location:../index.php?id=".$id);

        }
        else
        {
            header('location:error.php');
        }
    }
    else{
      echo "submit error";
    }
?>
