<?php
session_start();

  include('connection.php');

 $para=$_POST["num"] ;
  if($para == 1)
  {
      $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";

  }
  if($para == 2)
  {
     $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  }
  if($para ==3)
  {
    $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  $fname3 = $_POST['fname'];
  $lname3 = $_POST['lname'];
  $age3 = $_POST['age'];
  $aadhar3 =$_POST['aadhar'];
  $sqinsert3 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname3','$lname3', '$age3', '$aadhar3','$_SESSION[email]') ";
  }
  if($para == 4)
  {
    $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  $fname3 = $_POST['fname'];
  $lname3 = $_POST['lname'];
  $age3 = $_POST['age'];
  $aadhar3 =$_POST['aadhar'];
  $sqinsert3 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname3','$lname3', '$age3', '$aadhar3','$_SESSION[email]') ";
  $fname4 = $_POST['fname'];
  $lname4 = $_POST['lname'];
  $age4 = $_POST['age'];
  $aadhar4 =$_POST['aadhar'];
  $sqinsert4 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname4','$lname4', '$age4', '$aadhar4','$_SESSION[email]') ";

  }
  if($para == 5)
  {
    $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  $fname3 = $_POST['fname'];
  $lname3 = $_POST['lname'];
  $age3 = $_POST['age'];
  $aadhar3 =$_POST['aadhar'];
  $sqinsert3 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname3','$lname3', '$age3', '$aadhar3','$_SESSION[email]') ";
  $fname4 = $_POST['fname'];
  $lname4 = $_POST['lname'];
  $age4 = $_POST['age'];
  $aadhar4 =$_POST['aadhar'];
  $sqinsert4 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname4','$lname4', '$age4', '$aadhar4','$_SESSION[email]') ";
  $fname5 = $_POST['fname'];
  $lname5 = $_POST['lname'];
  $age5 = $_POST['age'];
  $aadhar5 =$_POST['aadhar'];
  $sqinsert5 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname5','$lname5', '$age5', '$aadhar5','$_SESSION[email]') ";

  }
  if($para == 6)
  {
    $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  $fname3 = $_POST['fname'];
  $lname3 = $_POST['lname'];
  $age3 = $_POST['age'];
  $aadhar3 =$_POST['aadhar'];
  $sqinsert3 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname3','$lname3', '$age3', '$aadhar3','$_SESSION[email]') ";
  $fname4 = $_POST['fname'];
  $lname4 = $_POST['lname'];
  $age4 = $_POST['age'];
  $aadhar4 =$_POST['aadhar'];
  $sqinsert4 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname4','$lname4', '$age4', '$aadhar4','$_SESSION[email]') ";
  $fname5 = $_POST['fname'];
  $lname5 = $_POST['lname'];
  $age5 = $_POST['age'];
  $aadhar5 =$_POST['aadhar'];
  $sqinsert5 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname5','$lname5', '$age5', '$aadhar5','$_SESSION[email]') ";
  $fname6 = $_POST['fname'];
  $lname6 = $_POST['lname'];
  $age6 = $_POST['age'];
  $aadhar6 =$_POST['aadhar'];
  $sqinsert6 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname6','$lname6', '$age6', '$aadhar6','$_SESSION[email]') ";

  }
  if($para == 7)
  {
    $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  $fname3 = $_POST['fname'];
  $lname3 = $_POST['lname'];
  $age3 = $_POST['age'];
  $aadhar3 =$_POST['aadhar'];
  $sqinsert3 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname3','$lname3', '$age3', '$aadhar3','$_SESSION[email]') ";
  $fname4 = $_POST['fname'];
  $lname4 = $_POST['lname'];
  $age4 = $_POST['age'];
  $aadhar4 =$_POST['aadhar'];
  $sqinsert4 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname4','$lname4', '$age4', '$aadhar4','$_SESSION[email]') ";
  $fname5 = $_POST['fname'];
  $lname5 = $_POST['lname'];
  $age5 = $_POST['age'];
  $aadhar5 =$_POST['aadhar'];
  $sqinsert5 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname5','$lname5', '$age5', '$aadhar5','$_SESSION[email]') ";
  $fname6 = $_POST['fname'];
  $lname6 = $_POST['lname'];
  $age6 = $_POST['age'];
  $aadhar6 =$_POST['aadhar'];
  $sqinsert6 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname6','$lname6', '$age6', '$aadhar6','$_SESSION[email]') ";
  $fname7 = $_POST['fname'];
  $lname7 = $_POST['lname'];
  $age7 = $_POST['age'];
  $aadhar7 =$_POST['aadhar'];
  $sqinsert7 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname7','$lname7', '$age7', '$aadhar7','$_SESSION[email]') ";

  }
  if($para == 8)
  {
     $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  $fname3 = $_POST['fname'];
  $lname3 = $_POST['lname'];
  $age3 = $_POST['age'];
  $aadhar3 =$_POST['aadhar'];
  $sqinsert3 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname3','$lname3', '$age3', '$aadhar3','$_SESSION[email]') ";
  $fname4 = $_POST['fname'];
  $lname4 = $_POST['lname'];
  $age4 = $_POST['age'];
  $aadhar4 =$_POST['aadhar'];
  $sqinsert4 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname4','$lname4', '$age4', '$aadhar4','$_SESSION[email]') ";
  $fname5 = $_POST['fname'];
  $lname5 = $_POST['lname'];
  $age5 = $_POST['age'];
  $aadhar5 =$_POST['aadhar'];
  $sqinsert5 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname5','$lname5', '$age5', '$aadhar5','$_SESSION[email]') ";
  $fname6 = $_POST['fname'];
  $lname6 = $_POST['lname'];
  $age6 = $_POST['age'];
  $aadhar6 =$_POST['aadhar'];
  $sqinsert6 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname6','$lname6', '$age6', '$aadhar6','$_SESSION[email]') ";
  $fname7 = $_POST['fname'];
  $lname7 = $_POST['lname'];
  $age7 = $_POST['age'];
  $aadhar7 =$_POST['aadhar'];
  $sqinsert7 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname7','$lname7', '$age7', '$aadhar7','$_SESSION[email]') ";
  $fname8 = $_POST['fname'];
  $lname8 = $_POST['lname'];
  $age8 = $_POST['age'];
  $aadhar8 =$_POST['aadhar'];
  $sqinsert8 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname8','$lname8', '$age8', '$aadhar8','$_SESSION[email]') ";

  }
  if($para == 9)
  {
     $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  $fname3 = $_POST['fname'];
  $lname3 = $_POST['lname'];
  $age3 = $_POST['age'];
  $aadhar3 =$_POST['aadhar'];
  $sqinsert3 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname3','$lname3', '$age3', '$aadhar3','$_SESSION[email]') ";
  $fname4 = $_POST['fname'];
  $lname4 = $_POST['lname'];
  $age4 = $_POST['age'];
  $aadhar4 =$_POST['aadhar'];
  $sqinsert4 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname4','$lname4', '$age4', '$aadhar4','$_SESSION[email]') ";
  $fname5 = $_POST['fname'];
  $lname5 = $_POST['lname'];
  $age5 = $_POST['age'];
  $aadhar5 =$_POST['aadhar'];
  $sqinsert5 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname5','$lname5', '$age5', '$aadhar5','$_SESSION[email]') ";
  $fname6 = $_POST['fname'];
  $lname6 = $_POST['lname'];
  $age6 = $_POST['age'];
  $aadhar6 =$_POST['aadhar'];
  $sqinsert6 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname6','$lname6', '$age6', '$aadhar6','$_SESSION[email]') ";
  $fname7 = $_POST['fname'];
  $lname7 = $_POST['lname'];
  $age7 = $_POST['age'];
  $aadhar7 =$_POST['aadhar'];
  $sqinsert7 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname7','$lname7', '$age7', '$aadhar7','$_SESSION[email]') ";
  $fname8 = $_POST['fname'];
  $lname8 = $_POST['lname'];
  $age8 = $_POST['age'];
  $aadhar8 =$_POST['aadhar'];
  $sqinsert8 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname8','$lname8', '$age8', '$aadhar8','$_SESSION[email]') ";
  $fname9 = $_POST['fname'];
  $lname9 = $_POST['lname'];
  $age9 = $_POST['age'];
  $aadhar9 =$_POST['aadhar'];
  $sqinsert9 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname9','$lname9', '$age9', '$aadhar9','$_SESSION[email]') ";
  }
  if($para == 10)
  {
    $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $age1 = $_POST['age'];
  $aadhar1 =$_POST['aadhar'];
  $sqinsert1 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname1','$lname1', '$age1', '$aadhar1','$_SESSION[email]') ";
  $fname2 = $_POST['fname'];
  $lname2 = $_POST['lname'];
  $age2 = $_POST['age'];
  $aadhar2 =$_POST['aadhar'];
  $sqinsert2 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname2','$lname2', '$age2', '$aadhar2','$_SESSION[email]') ";
  $fname3 = $_POST['fname'];
  $lname3 = $_POST['lname'];
  $age3 = $_POST['age'];
  $aadhar3 =$_POST['aadhar'];
  $sqinsert3 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname3','$lname3', '$age3', '$aadhar3','$_SESSION[email]') ";
  $fname4 = $_POST['fname'];
  $lname4 = $_POST['lname'];
  $age4 = $_POST['age'];
  $aadhar4 =$_POST['aadhar'];
  $sqinsert4 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname4','$lname4', '$age4', '$aadhar4','$_SESSION[email]') ";
  $fname5 = $_POST['fname'];
  $lname5 = $_POST['lname'];
  $age5 = $_POST['age'];
  $aadhar5 =$_POST['aadhar'];
  $sqinsert5 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname5','$lname5', '$age5', '$aadhar5','$_SESSION[email]') ";
  $fname6 = $_POST['fname'];
  $lname6 = $_POST['lname'];
  $age6 = $_POST['age'];
  $aadhar6 =$_POST['aadhar'];
  $sqinsert6 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname6','$lname6', '$age6', '$aadhar6','$_SESSION[email]') ";
  $fname7 = $_POST['fname'];
  $lname7 = $_POST['lname'];
  $age7 = $_POST['age'];
  $aadhar7 =$_POST['aadhar'];
  $sqinsert7 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname7','$lname7', '$age7', '$aadhar7','$_SESSION[email]') ";
  $fname8 = $_POST['fname'];
  $lname8 = $_POST['lname'];
  $age8 = $_POST['age'];
  $aadhar8 =$_POST['aadhar'];
  $sqinsert8 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname8','$lname8', '$age8', '$aadhar8','$_SESSION[email]') ";
  $fname9 = $_POST['fname'];
  $lname9 = $_POST['lname'];
  $age9 = $_POST['age'];
  $aadhar9 =$_POST['aadhar'];
  $sqinsert9 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname9','$lname9', '$age9', '$aadhar9','$_SESSION[email]') ";
  $fname10 = $_POST['fname'];
  $lname10 = $_POST['lname'];
  $age10 = $_POST['age'];
  $aadhar10 =$_POST['aadhar'];
  $sqinsert10 = "INSERT INTO passenger (fname,lname,age,adhaar,B_id) VALUES ('$fname10','$lname10', '$age10', '$aadhar10','$_SESSION[email]') ";
  
  }
  
  if(!mysqli_query($con, $sqinsert))
  {
    die('error');
  }
    echo "record inserted";
?>

<html>
<head>
<link rel="stylesheet" href="tab.css">

</head>
<body onload="tabHide();">

<div class="tab">
  <button id="pa1" class="tablinks" onClick="openPass(event, 'p1')" style="display:none">Passenger</button>
  <button id="pa2" class="tablinks" onClick="openPass(event, 'p2')" style="display:none">Passenger</button>
  <button id="pa3" class="tablinks" onClick="openPass(event, 'p3')" style="display:none">Passenger</button>
  <button id="pa4" class="tablinks" onClick="openPass(event, 'p4')" style="display:none">Passenger</button>
  <button id="pa5" class="tablinks" onClick="openPass(event, 'p5')" style="display:none">Passenger</button>
  <button id="pa6" class="tablinks" onClick="openPass(event, 'p6')" style="display:none">Passenger</button>
  <button id="pa7" class="tablinks" onClick="openPass(event, 'p7')" style="display:none">Passenger</button>
  <button id="pa8" class="tablinks" onClick="openPass(event, 'p8')" style="display:none">Passenger</button>
  <button id="pa9" class="tablinks" onClick="openPass(event, 'p9')" style="display:none">Passenger</button>
  <button id="pa10" class="tablinks" onClick="openPass(event, 'p10')" style="display:none">Passenger</button>
</div>

<form name="forma" id="12121" action="tp.php">
<div id="p1" class="tabcontent" style="display:none">
  <h3>Passenger 1</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname1"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname1"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age1" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar1"><br>
<input type="Submit" name="submit1" value="Next"><br>
</center>
</div>

<div id="p2" class="tabcontent" style="display:none">
  <h3>Passenger 2</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname2"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname2"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age2" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar2"><br>
<input type="Submit" name="submit2" value="Next"><br>
</center>
</div>

<div id="p3" class="tabcontent" style="display:none">
  <h3>Passenger 3</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname3"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname3"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age3" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar3"><br>
<input type="Submit" name="submit3" value="Next"><br>
</center>
</div>

<div id="p4" class="tabcontent" style="display:none">
  <h3>Passenger 4</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname4"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname4"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age4" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar4"><br>
<input type="submit" name="submit4" value="Next"><br>
</center>
</div>

<div id="p5" class="tabcontent" style="display:none">
  <h3>Passenger 5</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname5"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname5"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age5" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar5"><br>
<input type="submit" name="submit5" value="Next"><br>
</center>
</div>

<div id="p6" class="tabcontent" style="display:none">
  <h3>Passenger 6</h3>
 <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname6"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname6"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age6" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar6"><br>
<input type="submit" name="submit6" value="Next"><br>
</center>
</div>

<div id="p7" class="tabcontent" style="display:none">
  <h3>Passenger 7</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname7"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname7"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age7" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar7"><br>
<input type="submit" name="submit7" value="Next"><br>
</center>
</div>

<div id="p8" class="tabcontent" style="display:none">
  <h3>Passenger 8</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname8"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname8"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age8" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar8"><br>
<input type="submit" name="submit8" value="Next"><br>
</center>
</div>

<div id="p9" class="tabcontent" style="display:none">
  <h3>Passenger 9</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname9"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname9"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age9" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar9"><br>
<input type="submit" name="submit9" value="Next"><br>
</center>
</div>

<div id="p10" class="tabcontent" style="display:none">
  <h3>Passenger 10</h3>
  <center>
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname10"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname10"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age10" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar10" min="100000000000" max="999999999999"><br>
<input type="submit" name="submit10" value="Next"><br>
</center>
</div>
<hr>
<br><br>
<center>
 <input type="submit" name="submit" value="Submit">
 </form><br>
<p><font color="gray"><u>Elements marked with a red star are mandatory.</u></font></p>
</center>

<script>
//alert(par);
function openPass(evt, passName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(passName).style.display = "block";
    evt.currentTarget.className += " active";
}

function tabHide()
{
//var par=getElementById("000").value;
 var par=<?php echo $_POST["num"] ;?>;
alert(par);
 if(par==0)
  {
   document.getElementById("pa1").style.display="none";
   document.getElementById("pa2").style.display="none";
   document.getElementById("pa3").style.display="none";
   document.getElementById("pa4").style.display="none";
   document.getElementById("pa5").style.display="none";
   document.getElementById("pa6").style.display="none";
   document.getElementById("pa7").style.display="none";
   document.getElementById("pa8").style.display="none";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }
 if(par==1)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="none";
   document.getElementById("pa3").style.display="none";
   document.getElementById("pa4").style.display="none";
   document.getElementById("pa5").style.display="none";
   document.getElementById("pa6").style.display="none";
   document.getElementById("pa7").style.display="none";
   document.getElementById("pa8").style.display="none";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }

 if(par==2)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="none";
   document.getElementById("pa4").style.display="none";
   document.getElementById("pa5").style.display="none";
   document.getElementById("pa6").style.display="none";
   document.getElementById("pa7").style.display="none";
   document.getElementById("pa8").style.display="none";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }
 if(par==3)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="";
   document.getElementById("pa4").style.display="none";
   document.getElementById("pa5").style.display="none";
   document.getElementById("pa6").style.display="none";
   document.getElementById("pa7").style.display="none";
   document.getElementById("pa8").style.display="none";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }
 if(par==4)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="";
   document.getElementById("pa4").style.display="";
   document.getElementById("pa5").style.display="none";
   document.getElementById("pa6").style.display="none";
   document.getElementById("pa7").style.display="none";
   document.getElementById("pa8").style.display="none";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }
 if(par==5)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="";
   document.getElementById("pa4").style.display="";
   document.getElementById("pa5").style.display="";
   document.getElementById("pa6").style.display="none";
   document.getElementById("pa7").style.display="none";
   document.getElementById("pa8").style.display="none";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }
 if(par==6)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="";
   document.getElementById("pa4").style.display="";
   document.getElementById("pa5").style.display="";
   document.getElementById("pa6").style.display="";
   document.getElementById("pa7").style.display="none";
   document.getElementById("pa8").style.display="none";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }
 if(par==7)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="";
   document.getElementById("pa4").style.display="";
   document.getElementById("pa5").style.display="";
   document.getElementById("pa6").style.display="";
   document.getElementById("pa7").style.display="";
   document.getElementById("pa8").style.display="none";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }
 if(par==8)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="";
   document.getElementById("pa4").style.display="";
   document.getElementById("pa5").style.display="";
   document.getElementById("pa6").style.display="";
   document.getElementById("pa7").style.display="";
   document.getElementById("pa8").style.display="";
   document.getElementById("pa9").style.display="none";
   document.getElementById("pa10").style.display="none";
  }
 if(par==9)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="";
   document.getElementById("pa4").style.display="";
   document.getElementById("pa5").style.display="";
   document.getElementById("pa6").style.display="";
   document.getElementById("pa7").style.display="";
   document.getElementById("pa8").style.display="";
   document.getElementById("pa9").style.display="";
   document.getElementById("pa10").style.display="none";
  }
 if(par==10)
  {
   document.getElementById("pa1").style.display="";
   document.getElementById("pa2").style.display="";
   document.getElementById("pa3").style.display="";
   document.getElementById("pa4").style.display="";
   document.getElementById("pa5").style.display="";
   document.getElementById("pa6").style.display="";
   document.getElementById("pa7").style.display="";
   document.getElementById("pa8").style.display="";
   document.getElementById("pa9").style.display="";
   document.getElementById("pa10").style.display="";
  }
}
</script>
</body>
</html>