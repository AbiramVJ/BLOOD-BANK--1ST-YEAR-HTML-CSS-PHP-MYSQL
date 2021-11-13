<?php
include("insert.php");
?>
<html>
<head><link rel="stylesheet" type="text/css" href="style1.css">
<title>
</title>

<style>

table
{
color:white;
border-radius:20px;
}

#button
{
background-color:green;
color:white;
height:32px;
width:85px;
border-radius:25px;
}

</style>

</head>

<body>
  <ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="reg.php">Blood Registration</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<br><br><br><br><br><br><br>

<form action="reg.php" method="POST">
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td>Donor Name</td>
<td><input type="text" placeholder="First Name" required name="Donername"></td>
</tr>

<tr>
<td>Doner Last Name</td>
<td><input type="text" placeholder="Last Name" required name="lastname"></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" placeholder="Address" required name="address"></td>
</tr>

<tr>
<td>Blood Group</td>
<td><select name="Group">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>

</select></td>
</tr>

<tr>
<td>Email Address</td>
<td><input type="text" placeholder="Email Address" required name="email"></td>
</tr>

<tr>
<td>Age</td>
<td><input type="text" placeholder="age" required name="age"></td>
</tr>

<tr>
<td>Mobile No</td>
<td><input type="text" placeholder="Mobile No" required name="mobile"></td>
</tr>

<tr>
<td>Gender</td>  
<td>
<input type="radio" name="gender" required value="m">Male
<input type="radio" name="gender" required value="f">Female
</td>
</tr>

<tr>
<td colspan="2" align="center"><a href ="login.html"><input type="submit" name="submit" value="submit" id="button"></a></td>
</tr>
</form>
</table>
<?php
if (isset($_POST["submit"])) 
{
  $Donername = $_POST['Donername'];
   $lastname = $_POST['lastname'];
   $address = $_POST['address'];
   $Group = $_POST['Group'];
   $email = $_POST['email'];
   $age = $_POST['age'];
   $mobile = $_POST['mobile'];
   $gender = $_POST['gender'];

   if ($Donername !="" && $lastname !="" && $address !="" && $Group !="" && $email !="" && $age !="" && $mobile !="" && $gender !="" ) 
   {
     $sql="INSERT INTO reg
     (DonorName,Donerlast,Address,BloodGroup,EmailAddress,Age,Mobile_NO,Gender)
     VALUES('$Donername','$lastname','$address','$Group','$email','$age','$mobile','$gender')";
     if($conn->query($sql))
     {
      echo "data has stored sucseesfully";
     }
     else
     {
      echo "some error try again";
     }
   }
   else{
    echo "all file are required";
   }
 }
   else
   {
    echo "please fill all the details";
   }

?>
<br><br>
<br>
<br>
<br>
<br>



<div class="footer">
  
  <p>Copyright c2019 right reserved by Srilankan Blood Bank</p>
  
</div>
</body>
</html>