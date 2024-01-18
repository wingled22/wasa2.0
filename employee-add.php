<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";


	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
    $empstatus = $_POST["empstatus"];
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
        
	
if ($error === 0) {
    if ($img_size > 925000) {
        $em = "Sorry, your file is too large.";
        header("Location: employee-add-form.php?error=$em");
    }
    else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'uploads/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
                        
            $sql = "INSERT INTO employee 
            (image_url ,empstatus ,firstname ,middlename ,lastname ,age ,gender ,civilstat ,citizenship ,religion ,contact ,email ,address ,birthplace ,birthdate ,fathername ,mothername ,idnum ,hireddate ,department ,emername ,emercontact ,emerrelation ,emeraddress) 
            VALUES 
            ('$new_img_name','$empstatus','$firstname','$middlename','$lastname','$age','$gender','$civilstat','$citizenship','$religion','$contact','$email','$address','$birthplace','$birthdate','$fathername','$mothername','$idnum','$hireddate','$department','$emername','$emercontact','$emerrelation','$emeraddress') ";
            
            $res  = $conn->query($sql);
            if($res)
                header("location: employees.php");
            }
            else {
                $em = "You can't upload files of this type";
                header("Location: employee-add-form.php?error=$em");
            }
		}
	}
    else {
		$em = "unknown error occurred!";
		header("Location: employee-add-form.php?error=$em");
	}


        
                  
    

			