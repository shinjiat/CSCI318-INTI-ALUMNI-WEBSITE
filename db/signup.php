<?php
    session_start();
    include ("dbconfig.php");
    if(isset($_POST["submit"]))
    {
        $username = $_POST['username'];
        $password = $_POST["password"];
        $conpass = $_POST['conpassword'];
        //$image = 'https://lh3.googleusercontent.com/-LR423YiTbOQ/AAAAAAAAAAI/AAAAAAAAAAA/eAMb2whBK-A/photo.jpg';
      //  $imagecontent= addslashes(file_get_contents($image));

        if ($password != $conpass){
          echo "Password Didn't Match";
          header('location:error.php');
        }

        else{
          $password = mysqli_real_escape_string($dbconfig, $password);
          //$password = md5($password,TRUE);

          $sql="SELECT username FROM _user WHERE username='$username'";

          $result=mysqli_query($dbconfig,$sql);
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
          if(mysqli_num_rows($result) == 1)
          {
                echo "<script>
                  alert('Email/User Name already existed');
                </script>";
          }
          else
          {
              $query = mysqli_query($dbconfig, "INSERT into _user(username,password) VALUES ('$username','$password')");

              /*
              if ($query){
                //header('location:../index.php');
                $sql_reg = "SELECT id from users where email ='$email'";
                $result_reg = mysqli_query($dbconfig,$sql_reg);
                $row_id = mysqli_fetch_array($result_reg,MYSQLI_ASSOC);
                $newID = $row_id['id'];
                if (mysqli_num_rows($result_reg) == 1){
                    $sql = mysqli_query($dbconfig, "INSERT INTO user_education (id, ptitle,company,college,last_qual,employment_project,aboutme) VALUES ('$newID','$ptitle','$company','$college','$last_qual','$employment_project','$aboutme')");
                }else{
                  echo "couldnot get id";
                }
                header('location:success.php');
              }else{
                header('location:error.php');
              }
              */

              echo '<script>alert("Request Sent, your ID will be activated within 24 hour by administrator")';
              header('location:../index.php');

              if($query){
                  echo 'Sign up success';
              }
              else{
                  header('location:error.php');
              }
          }
        }
    }
    else{
        echo'submit error';
    }
?>
