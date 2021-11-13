<?php
include("insert.php");
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
   <!-- <div style="background-image: url('7.jpg');"> -->
  <ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="reg.php">Blood Registration</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li><a href="about.php">About</a></li>
</ul>



<form action="admin.php" method="POST">
  <div class="imgcontainer">
    <img src="1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit" value="submit">Login</button>
    
  </div>

</form>
<?php
if(isset($_POST["submit"]))
{
  $uname = $_POST['uname'];
   $psw = $_POST['psw'];
   if ($uname!="" && $psw!="")
    {
     $sql="SELECT username,password FROM adminlogin WHERE username='$uname' AND password='$psw'";
     $results=$conn->query($sql);
     if ($results->num_rows == 1) {
       header("Location:addminpage.php");
       ob_end_flush();
     }
     else
     {
      echo "invalid username or password";
     }
   }else{
    echo "please enter the all details";
   }

}
else{
  echo "please enter all details";
}
?>


<div class="footer">
  
  <p>Copyright c2019 right reserved by Srilankan Blood Bank</p>
  
</div>
</body>
</html>
