<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    
    $empID = $_POST["empID"]; 
    $certName = $_POST["certName"]; 
    $dateStart = $_POST["dateStart"];
    $dateEnd = $_POST["dateEnd"];
    $qualification = $_POST["qualification"]; 
    $venue = $_POST["venue"];


    $sql = "INSERT INTO certification 
    (empID, certName, dateStart, dateEnd, qualification, venue)
    VALUES 
    ('$empID', '$certName', '$dateStart', '$dateEnd', '$qualification', '$venue')";    
    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empID");
    else    
        echo "error happened";