<?php
    session_start();
    if($_POST == null){
        header("location: index.php");
    }

    require "dbconnection.php";

    var_dump($_POST);
    var_dump($_SESSION);
    // var_dump($_GET);

    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $sql = "SELECT * from admin where username = '$username' and pass = '$pass' limit 1";
    
    $res  = $conn->query($sql);
    if($res){

        // header("location: employees.php");
        
        $rowcount=mysqli_num_rows($res);
        // echo $rowcount;

        if($rowcount > 0 ){
            echo "there is an admin with that creds";

            $_SESSION["STATUS"] =  "logged_in";
            header("location: dashboard.php");
        }else    
        {
            header("location: index.php");
        }
    }
    else    
    {
        header("location: index.php");
    }
