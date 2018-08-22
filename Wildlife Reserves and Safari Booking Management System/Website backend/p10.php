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
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a><font size="2">PASSENGER 10</a></font>
  <a href="pp.php"><font size="2">BOOKING DETAILS</a></font>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

  <h3 align="center">PASSENGER 10 DETAILS</h3>
  <center>
    <form method="post" action="pp.php">
        <input type="hidden" name="submitted" value="true"> 
      First Name<font color="red">*</font>:<br>
      <input type="text" name="fname"><br>
      Last Name<font color="red">*</font>:<br>
      <input type="text" name="lname"><br>
      Age<font color="red">*</font>:<br>
      <input type="number" name="age" min="3" max="80"><br>
      Aadhar Card Number<font color="red">*</font>:<br>
      <input type="number" name="aadhar"><br>
      <input type="submit" name="submit" value="Submit"><br>
    </form>
  </center>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
