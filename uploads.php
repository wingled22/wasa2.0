<?php
	if (isset($_POST['uploads']) && isset($_FILES['image'])) {
	include "dbconnection.php";

	echo "<pre>";
	print_r($_FILES['image']);
	echo "</pre>";
		$image_name = $_FILES['image']['name'];
		$image_temp = $_FILES['image']['tmp_name'];
		$image_size = $_FILES['image']['size'];
		$ext = explode(".", $image_name);
		$end = end($ext);
		$allowed_ext = array("jpg", "jpeg", "gif", "png");
		$name = time().".".$end;
		$path = "upload/".$name;
		
			if ($error === 0) {
		if ($img_size > 925000) {
			$em = "Sorry, your file is too large.";
		    header("Location: employee-profile.php?error=$emID");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'upload/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				
								$sql = "INSERT INTO uploadcert(image) 
				    VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: view.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: employee-profile.php?error=$emID");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: employee-profile.php?error=$emID");
	}

}else {
	header("Location: employee-profile.php?error=$emID");
}