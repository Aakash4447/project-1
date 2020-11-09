<?php
    require "db.php";


    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];

        $sql="DELETE FROM Student WHERE id=$id";
        $result= $conn->query($sql);

        header("Location: Dashboard.php");
    }else{
        header("Location: Dashboard.php");
    }
?>