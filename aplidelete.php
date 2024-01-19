<?php
    if($_GET == null){
        header("location: applicants.php");
    }

    require "dbconnection.php";

    var_dump($_GET);

    $id = $_GET["id"];
    $empID = $_GET["empID"];

    $sql = "delete from appinf.empid WHERE  status='applicant' order by emp.id desc";

    $res  = $conn->query($sql);
    if($res)
        header("location: applicants.php");
    else    
        echo "error happened";

                         
                        