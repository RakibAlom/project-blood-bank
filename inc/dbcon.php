<?php 
	
	$con = mysqli_connect('localhost','root','','blood_bank');

	if(!$con){
		echo "<script> alert('Database Not Connected');</script>";
	}

 ?>