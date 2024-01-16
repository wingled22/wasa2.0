<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $id = $_POST['id'];

    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $civilstat = $_POST["civilstat"];
    $citizenship = $_POST["citizenship"];
    $religion = $_POST["religion"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $birthplace = $_POST["birthplace"];
    $birthdate = $_POST["birthdate"];
    $fathername = $_POST["fathername"];
    $mothername = $_POST["mothername"];
   
    $appinfID = $_POST["appinfID"];
    $examination = isset($_POST["examination"]) ? $_POST["examination"] : null;
    $demo = isset($_POST["demo"]) ? $_POST["demo"] : null;
    $contractSigning = isset($_POST["contractSigning"]) ? $_POST["contractSigning"] : null;
    $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : null;
   
    $sql = "UPDATE employee SET
        firstname = '$firstname' ,
        middlename = '$middlename' ,
        lastname = '$lastname' ,
        age = '$age' ,
        gender = '$gender' ,
        civilstat = '$civilstat' ,
        citizenship = '$citizenship' ,
        religion = '$religion' ,
        contact = '$contact' ,
        email = '$email' ,
        address = '$address' ,
        birthplace = '$birthplace' ,
        birthdate = '$birthdate' ,
        fathername = '$fathername' ,
        mothername = '$mothername'
    where id = $id ";

    $res  = $conn->query($sql);
    
    if($res){
        echo "<br><br>updated successfully";
        // header("location: employee-profile.php?id=$id");
    }
    else    
        echo "error happened";


    $sql2 = "UPDATE applicationinfo SET
        examination = '$examination' ,
        demo = '$demo' ,
        contractSigning = '$contractSigning' ,
        startDate = '$startDate' 
    where id = $appinfID";

    $res2  = $conn->query($sql2);

    if($res2){
        echo "<br><br>updated successfully";
        // header("location: applicants.php");
    }
    else    
        echo "error happened";


    if($contractSigning != null && $contractSigning == 'Passed'){

        $sql3 = "UPDATE employee SET
            status = 'active'       
        where id = $id ";

        $res3  = $conn->query($sql3);

        if($res3){
            echo "<br><br>updated successfully";
            header("location: employee-profile.php?id=$id");
        }
        
    }else{
        header("location: applicants.php");

    }


   

    