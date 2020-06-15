<?php 
	if (isset($_POST['make'])) {
		# code...
		$admin_name = $_POST['admin_name'];
		$admin_blood = $_POST['admin_blood'];
		$admin_gender = $_POST['admin_gender'];
		$admin_birth = $_POST['admin_birth'];
		$admin_phone = $_POST['admin_phone'];
		$admin_address = $_POST['admin_address'];
		$admin_email = $_POST['admin_email'];
		$admin_password = $_POST['admin_password'];
		$admin_image = $_FILES['admin_image']['name'];
		$tmp = $_FILES['admin_image']['tmp_name'];

		$upload_path = '../upload/admin_image/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$admin_image);
		if (!$upload_check) {
			# code...
			echo "<script> 
			alert('Image Uploaded Failed');
			window.open('addadmin.php','_self');
			</>";
		}

		include '../inc/dbcon.php';

		$sql = "INSERT INTO admin (admin_name,admin_blood,admin_gender,admin_birth,admin_phone,admin_address,admin_email,admin_password,admin_image) VALUES ('$admin_name','$admin_blood','$admin_gender','$admin_birth','$admin_phone','$admin_address','$admin_email','$admin_password','$admin_image')";

		$run = mysqli_query($con,$sql);

		if ($run == true) {
			# code...
			echo "<script> 
			alert('Make Admin Successfully');
			window.open('viewadmin.php','_self');
			</>";
		}else{
			echo "<script> 
			alert('Make Admin Failed');
			window.open('addadmin.php','_self');
			</>";
		}
	}

 ?>