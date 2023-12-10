<?php

    $host='localhost';
    $user = 'root';
    $password = '';
    $db = "aet";

    $conn=mysqli_connect($host,$user,$password,$db,);
    if($conn == false)
    {
        die("CONNECTION FAILED");
    }

?>