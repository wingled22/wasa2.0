<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $empID = $_POST["empID"];
    $offenseType = $_POST["offenseType"];
    $descr = $_POST["descr"];
    $sanction = $_POST["sanction"];

    $sql = "INSERT INTO offense 
    (empID, offenseType, descr, sanction)
    VALUES 
    ('$empID', '$offenseType', '$descr', '$sanction')";    
    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empID");
    else    
        echo "error happened";