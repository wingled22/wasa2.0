<?php
    if($_POST == null){
        header("location: employees.php");
    }

    require "dbconnection.php";

    var_dump($_POST);

    $empID = $_POST["empID"]; 
    $certName = $_POST["certName"]; 
    $dateStart = $_POST["dateStart"];
    $dateEnd = $_POST["dateEnd"];
    $qualification = $_POST["qualification"]; 
    $venue = $_POST["venue"];

// Check if a file was uploaded
if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    $target_dir = __DIR__.'/upload/'; 
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

   
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    
   
    $extensions_arr = array("jpg","jpeg","png","gif");

    
    if(in_array($imageFileType,$extensions_arr) ){
        
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$image)){
            echo "Image uploaded successfully.";

            // Now you can continue with the rest of your code
        } else {
            echo "Failed to upload image.";
            $last_error = error_get_last();
            echo "Sorry, there was an error uploading your file. Error details: " . print_r($last_error, true);
        }
    } else {
        echo "Invalid file type. Allowed types: jpg, jpeg, png, gif.";
    }
} else {
    echo "No file uploaded.";
}

    $sql = "INSERT INTO certification 
    (empID, certName, dateStart, dateEnd, qualification, venue, image)
    VALUES 
    ('$empID', '$certName', '$dateStart', '$dateEnd', '$qualification', '$venue', '$image')";    
    $res  = $conn->query($sql);
    if($res)
        header("location: employee-profile.php?id=$empID");
    else{
        echo "error happened"; 
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }
?>
