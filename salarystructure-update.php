<?php
    if($_POST == null){
        header("location: wasa.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $id = $_POST["id"];
    $category = $_POST["category"];
    $name = $_POST["name"];
    $residency = $_POST["residency"];
    $license = $_POST["license"];
    $salary = $_POST["salary"];

    $sql = "UPDATE salarystructure SET
        category = '$category' ,
        name = '$name' ,
        residency = '$residency' ,
        license = '$license' ,
        salary = '$salary' 
    where id = $id ";
    echo "<br>";
    $res  = $conn->query($sql);
    if($res)
        header("location: wasa.php");
    else    
        echo "error happened";