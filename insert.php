<?php
	// $Donername = $_POST['Donername'];
	// $lastname = $_POST['lastname'];
	// $address = $_POST['address'];
	// $Group = $_POST['Group'];
	// $email = $_POST['email'];
	// $age = $_POST['age'];
	// $mobile = $_POST['mobile'];
	// $gender = $_POST['gender'];
	
	$conn = new mysqli('localHost','root','','register');
	if($conn->connect_error)
	{
		echo $conn->connect_error;
		die("connection fail");
	}
	// else{
	// 	echo "connected";
	// }

?>