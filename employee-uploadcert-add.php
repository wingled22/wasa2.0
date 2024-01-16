<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

	echo "<pre>";
	print_r($_FILES['image']);
	echo "</pre>";



	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];
    $empID = $_POST["empID"];
    $cdateFinished = $_POST["cdateFinished"];
    $certAttended = $_POST["certAttended"];
	
	if ($error === 0) {
		if ($img_size > 925000) {
			$em = "Sorry, your file is too large.";
		    header("Location: employee-uploadcert-add-form.php?id=$empID");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

    $sql = "INSERT INTO images (empID, image, cdateFinished, certAttended)
    VALUES 
    ('$empID', '$new_img_name', '$cdateFinished', '$certAttended')";    
    
    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empID");
   }else {
				$em = "You can't upload files of this type";
		        header("Location: employee-uploadcert-add-form.php?error=$empID");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: employee-uploadcert-add-form.php?error=$empID");
	}	
