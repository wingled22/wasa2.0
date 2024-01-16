<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $empID = $_POST["empID"];
    $typeDegree = $_POST["typeDegree"];
    $dateFinished = $_POST["dateFinished"];
    $schoolAttended = $_POST["schoolAttended"];

    $sql = "INSERT INTO educattain 
    (empID, typeDegree, dateFinished, schoolAttended)
    VALUES 
    ('$empID', '$typeDegree', '$dateFinished', '$schoolAttended')";    
    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empID");
    else    
        echo "error happened";