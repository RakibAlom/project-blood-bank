<?php 
	 $id = $_GET['id'];

	 include '../inc/dbcon.php';

	 $sql = "DELETE FROM admin WHERE admin_id = '$id'";

	 $run = mysqli_query($con,$sql);
	 if ($run == true) {
		# code...
		echo "<script>
			alert('Admin Removed');
			window.open('viewadmin.php','_self');
		</script>";
	}else{
		echo "<script>
			alert('Admin Not Removed');
			window.open('viewadmin.php','_self');
		</script>";
	}

 ?>