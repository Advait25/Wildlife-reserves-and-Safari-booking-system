<?php
session_start();
if(isset($_POST['submitted']))
{
  include('connection.php');
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];
  $aadhar =$_POST['aadhar'];
  $sqinsert = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname','$lname', '$age', '$aadhar','$_SESSION[email]') ";
  if(!mysqli_query($con, $sqinsert))
  {
    die('error');
  }
    echo "record inserted";


}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2 align="center">WOULD YOU LIKE TO ENTER MORE PASSENGERS?</h2> 
<a href="p1.php"><h3 align="center">YES</h3></a><p align="center">OR</p><a href="tick1.php"><h3 align="center"><font color="green">CLICK HERE FOR TICKET PRINTING DETAILS</font></a></h3>
</body>
</html>