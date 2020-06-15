<?php 
	
	$id = $_GET['id'];

	include '../inc/dbcon.php';

	$sql = "DELETE FROM blood_donator WHERE donar_id = '$id'";
	$run = mysqli_query($con,$sql);

	if ($run == true) {
		# code...
		echo "<script>
			alert('Donar Removed');
			window.open('../admin/viewdonar.php','_self');
		</script>";
	}else{
		echo "<script>
			alert('Donar Not Removed');
			window.open('../admin/viewdonar.php','_self');
		</script>";
	}

 ?>