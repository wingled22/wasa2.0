<?php

var_dump($_POST);

if($_POST == null){
    header("location: employees.php");
}

error_reporting(1);

require "dbconnection.php";


$empId = $_POST["empId"];
$adjustmentId = $_POST["adjustmentId"];

$sql = "insert into salaryadjustment (empID, adjustmentId) values ($empId, $adjustmentId)";    

echo "saving data" . $empId . " ,  " . $adjustmentId;
echo "</br>";
$res  = $conn->query($sql);
if($res)
    header("Location: employee-profile.php?id=$empId");
else    
    echo "error happened";


echo "<pre>";
echo print_r( error_get_last() );
echo "</pre>";