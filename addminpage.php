<?php

include("insert.php");
if (isset($_POST["submit"]))
 {
	$bloodgroup = $_POST["bloodgroup"];
}else{
	$bloodgroup='A';
}

$sql = "SELECT * FROM reg WHERE BloodGroup='$bloodgroup'";
	$result=$conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="addminpage.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title></title>
	
</head>
<body>
 <div class="menubar">

<ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="reg.php">Blood Registration</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li><a href="about.php">About</a></li>
</ul>
</div>
<form method="POST" action="addminpage.php">
	<label>blood group</label><br>
	<input type="text" name="bloodgroup" placeholder="blood Group">
	<input type="submit" name="submit" value="Check"><br>
	

<table>
	
	<tr>
		<th>Donor Name</th>
		<th>Doner Last Name</th>
		<th>Address</th>
		<th>Blood Group</th>
		<th>Email Address</th>
		<th>Age</th>
		<th>Mobile No</th>
		<th>Gender</th>
	</tr>

	<tbody>
                <?php foreach($result as $r){ 
                        ?>
                <tr>
                    
            <td><?php echo $r['DonorName']?></td>
			<td><?php echo $r['Donerlast']?></td>
			<td><?php echo $r['Address']?></td>
			<td><?php echo $r['BloodGroup']?></td>
			<td><?php echo $r['EmailAddress']?></td>
			<td><?php echo $r['Age']?></td>
			<td><?php echo $r['Mobile_NO']?></td>
			<td><?php echo $r['Gender']?></td>
              
                </tr>
                  <?php }?>
            </tbody>
	
	
</table>
</form>



<div class="footer">
  
  <p>Copyright c2019 right reserved by Srilankan Blood Bank</p>
  
</div>
</body>

</html>