<?php
    $conn=new mysqli("localhost","root","","stud");

    if($conn->connect_error)
    {
        die("connection failed: ".$conn->connect_error);
    }
?>