<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    // var_dump($_POST);

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
    $idnum = $_POST["idnum"];
    $hireddate = $_POST["hireddate"];
    $department = $_POST["department"];
    $emername = $_POST["emername"];
    $emercontact = $_POST["emercontact"];
    $emerrelation = $_POST["emerrelation"];
    $emeraddress = $_POST["emeraddress"];
    $empstatus = $_POST["empstatus"];
    $salary = $_POST["salary"];



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
        mothername = '$mothername' ,
        idnum = '$idnum' ,
        hireddate = '$hireddate' ,
        department = '$department' ,
        emername = '$emername' ,
        emercontact = '$emercontact' ,
        emerrelation = '$emerrelation' ,
        emeraddress = '$emeraddress' ,
        empstatus = '$empstatus',
        salary = '$salary'

    where id = $id ";
    echo "<br>";
    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$id");
    else    
        echo "error happened";
