<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

     var_dump($_POST);

    $id = $_POST["id"]; 
    $empID = $_POST["empid"]; 
    $certName = $_POST["certName"]; 
    $dateStart = $_POST["dateStart"];
    $dateEnd = $_POST["dateEnd"];
    $qualification = $_POST["qualification"]; 
    $venue = $_POST["venue"];

    
    $sql = "UPDATE certification SET
        certName = '$certName' ,
        dateStart = '$dateStart' ,
        dateEnd = '$dateEnd' ,
        qualification = '$qualification' ,
        venue = '$venue' 
    where id = $id ";

    $res  = $conn->query($sql);

    var_dump($res);

    if($res)
        header("location: employee-profile.php?id=$empID");
    else    
        echo "error happened";