<?php
    // if($_POST == null){
    //     header("location: employees.php");
    // }

    require "dbconnection.php";

     var_dump($_POST);

    $id = $_POST["id"]; 
    $empID = $_POST["empid"]; 
    $offenseType = $_POST["offenseType"]; 
    $descr = $_POST["descr"];
    $sanction = $_POST["sanction"];

    
    $sql = "UPDATE offense SET
        offenseType = '$offenseType' ,
        descr = '$descr' ,
        sanction = '$sanction' 
    where id = $id ";

    $res  = $conn->query($sql);

    var_dump($res);

    if($res)
        header("location: employee-profile.php?id=$empID");
    else    
        echo "error happened";