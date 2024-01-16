<?php
    if($_POST == null){
        header("location: wasa.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $category = $_POST["category"];
    $name = $_POST["name"];
    $residency = $_POST["residency"];
    $license = $_POST["license"];
    $salary = $_POST["salary"];

    $sql = "INSERT INTO salarystructure 
    ( category ,name ,residency ,license ,salary ) 
    VALUES 
    ('$category','$name','$residency','$license','$salary') ";
    
    $res  = $conn->query($sql);
    if($res)
        header("location: wasa.php");
    else    
        echo "error happened";