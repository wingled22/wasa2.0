<?php
if ($_POST == null || !isset($_POST['empID'])) {
    header("location: employees.php");
}

require "dbconnection.php";

$id = $_POST["Id"];
$empID = $_POST["empID"];
$datestart = $_POST["dateStart"];
$dateEnd = $_POST["dateEnd"];
$reason = $_POST["reason"];
$type = $_POST["type"];
$daystatus = $_POST["timeOption"];
$numday = $_POST["days"];
$status = $_POST["type"];

$sql = "UPDATE absent SET 
            datestart = '$datestart',
            dateEnd = '$dateEnd',
            reason = '$reason',
            status = '$status',
            daystatus = '$daystatus',
            numday = '$numday'
        WHERE id = '$id'";

$res = $conn->query($sql);

if ($res) {
    header("location: employee-profile.php?id=$empID");
} else {
    echo "Error happened: " . $conn->error;
}

$conn->close();
?>
