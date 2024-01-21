<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $empID = $_POST["empID"];
    $dateStart = $_POST["dateStart"];
    $dateEnd = $_POST["dateEnd"];
    $reason = $_POST["reason"];
    $type = $_POST["type"];
    $daystatus = $_POST["timeOption"];
    $numday = $_POST["days"];

    $sql = "INSERT INTO absent 
    (empID, datestart, dateEnd, reason, status,daystatus,numday)
    VALUES 
    ('$empID', '$dateStart', '$dateEnd', '$reason', '$type','$daystatus','$numday')";    
    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empID");
    else    
        echo "error happened";