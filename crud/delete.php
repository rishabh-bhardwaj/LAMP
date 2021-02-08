<?php
$id = $_GET['id'];
include "first.php";
	$qry ="DELETE FROM `users` WHERE `id`= '$id'";
    $run = mysqli_query($conn,$qry);
    //echo $run;
	if($run == true)
	{
		echo "data deleted succesfull";
		header("Location:details.php");
	}
?>
