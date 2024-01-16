<?php

    function isLoggedIn(){
        if(isset($_SESSION['STATUS'])){
            header("location: dashboard.php");


        }
        
    }
?>