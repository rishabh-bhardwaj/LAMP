<?php
    $hostname='localhost';
    $username="root";
    $pass='';
    $databasename="lamp";
    $conn= mysqli_connect($hostname,$username,$pass,$databasename);
    if($conn)
    {
        
    }
    else
    {
        echo "connection not succesfull";
    }
?>