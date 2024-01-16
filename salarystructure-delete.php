<?php
    if($_GET == null){
        header("location: wasa.php");
    }

    require "dbconnection.php";

    var_dump($_GET);

    $id = $_GET["id"];
    $empid = $_GET["empid"];
    

    $sql = "delete from salarystructure where id = $id ";

    $res  = $conn->query($sql);
    if($res)
        header("location: wasa.php");
    else    
        echo "error happened";