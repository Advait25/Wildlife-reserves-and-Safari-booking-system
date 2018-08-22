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


<div id="p1" class="tabcontent" style="display:none">
  <h3>Passenger 1</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="Submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p2" class="tabcontent" style="display:none">
  <h3>Passenger 2</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="Submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p3" class="tabcontent" style="display:none">
  <h3>Passenger 3</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="Submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p4" class="tabcontent" style="display:none">
  <h3>Passenger 4</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p5" class="tabcontent" style="display:none">
  <h3>Passenger 5</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p6" class="tabcontent" style="display:none">
  <h3>Passenger 6</h3>
 <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p7" class="tabcontent" style="display:none">
  <h3>Passenger 7</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p8" class="tabcontent" style="display:none">
  <h3>Passenger 8</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p9" class="tabcontent" style="display:none">
  <h3>Passenger 9</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar"><br>
<input type="submit" name="submit" value="Next"><br>
</form>
</center>
</div>

<div id="p10" class="tabcontent" style="display:none">
  <h3>Passenger 10</h3>
  <center>
<form method="post" action="final1.php">
  <input type="hidden" name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" name="lname"><br>
Age<font color="red">*</font>:<br>
<input type="number" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input type="number" name="aadhar" min="100000000000" max="999999999999"><br>
<input type="submit" name="submit" value="Next"><br>
</form>
</center>
</div>
<hr>
<br><br>
<center>
 <form name="submitpass" action="tick.php">
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