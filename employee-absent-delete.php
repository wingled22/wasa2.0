<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $id = $_GET["id"];
    $empid = $_GET["empid"];
    

    $sql = "delete from absent where id = $id ";

    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empid");
    else    
        echo "error happened";