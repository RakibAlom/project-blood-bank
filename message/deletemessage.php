<?php 
	
	$id = $_GET['id'];

	include '../inc/dbcon.php';

	$sql = "DELETE FROM message WHERE id = '$id'";

	$run = mysqli_query($con,$sql);

	if ($run == true) {
		# code...
		echo "<script>
			alert('Message Deleted');
			window.open('viewmessage.php','_self');
		</script>";
	}else{
		echo "<script>
			alert('Message Not Deleted');
			window.open('viewmessage.php','_self');
		</script>";
	}

 ?>