<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $id = $_POST["id"];
    $empid = $_POST["empid"];
    $typeDegree = $_POST["typeDegree"];
    $dateFinished = $_POST["dateFinished"];
    $schoolAttended = $_POST["schoolAttended"];

    $sql = "UPDATE educAttain SET
        typeDegree = '$typeDegree' ,
        dateFinished = '$dateFinished' ,
        schoolAttended = '$schoolAttended' 
    where id = $id ";

    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empid");
    else    
        echo "error happened";