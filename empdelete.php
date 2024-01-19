<?php
    if($_GET == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_GET);

    $id = $_GET["id"];
    $empid = $_GET["empid"];
    

    $sql = "delete from employee where id = $id ";

    $res  = $conn->query($sql);
    if($res)
        header("location: employees.php");
    else    
        echo "error happened";