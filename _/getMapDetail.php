<?php
    $servername = "mysql.hostinger.my";
    $database = "u559668083_inti";
    $username = "u559668083_inti";
    $password = "Onlyhostinger";

    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection

    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, block, level, name, image FROM map";

    if($result = mysqli_query($conn, $sql))
    {
        $resultArray = array();
        $tempArray = array();

        while($row = $result->fetch_object())
        {
            $tempArray = $row;
            array_push($resultArray, $tempArray);
        }
    }

    echo json_encode($resultArray);

    mysqli_close($conn);
  ?>