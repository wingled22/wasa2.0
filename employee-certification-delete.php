<?php
    if($_GET == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_GET);

    $id = $_GET["id"];
    $empid = $_GET["empid"];
    

    $sql = "delete from certification where id = $id ";

    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empid");
    else    
        echo "error happened";