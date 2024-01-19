<?php
    if($_POST == null){
        header("location: applicants.php");
    }

    require "dbconnection.php";

    var_dump($_POST);


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
   
        

    $sql = "INSERT INTO employee 
    ( firstname ,middlename ,lastname ,age ,gender ,civilstat ,citizenship ,religion ,contact ,email ,address ,birthplace ,birthdate ,fathername ,mothername ,status ) 
    VALUES 
    ('$firstname','$middlename','$lastname','$age','$gender','$civilstat','$citizenship','$religion','$contact','$email','$address','$birthplace','$birthdate','$fathername','$mothername', 'applicant' ) ";
    
    $res  = $conn->query($sql);
    if($res)
        echo "added employee";
    else    
        echo "error happened";

    $last_id = $conn->insert_id;

    $sql2 = "INSERT INTO applicationinfo (empid) value ($last_id)";
    $res2  = $conn->query($sql2);

    if($res2)
        /*echo "added successfully";   */  header("location: applicants.php");
    else    
        echo "error happened";

        

        // "SELECT 
        //     emp.firstname ,
        //     emp.middlename ,
        //     emp.lastname ,
        //     emp.age ,
        //     emp.gender ,
        //     emp.civilstat ,
        //     emp.citizenship ,
        //     emp.religion ,
        //     emp.contact ,
        //     emp.email ,
        //     emp.address ,
        //     emp.birthplace ,
        //     emp.birthdate ,
        //     emp.fathername ,
        //     emp.mothername ,

        //     appinf.examination,
        //     appinf.demo,
        //     appinf.contractSigning,
        //     appinf.startDate
       
        // FROM employee AS emp
        // inner join applicationinfo AS appinf 
        // on emp.id = appinf.empid
        // "
                  
    

