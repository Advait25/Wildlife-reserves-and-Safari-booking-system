


<html>
<head>
<link rel="stylesheet" href="tab.css">

</head>
<body onload="tabHide();">
<div id="hide"></div>
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
<form method="post" >
  <input type="hidden"  name="submitted" value="true"> 
First Name<font color="red">*</font>:<br>
<input type="text" id="fname1" name="fname"><br>
Last Name<font color="red">*</font>:<br>
<input type="text" id="lname1" name="age"><br>
Age<font color="red">*</font>:<br>
<input type="number" id="age1" name="age" min="3" max="80"><br>
Aadhar Card Number<font color="red">*</font>:<br>
<input id="aadhar1" type="number" name="aadhar"><br>
<input  id="submit1" type="Submit" name="submit" value="Next"><br><br>
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>

<div id="p2" class="tabcontent" style="display:none">
  <h3>Passenger 2</h3>
  <center>
<form method="post" action="teb.php">
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
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>

<div id="p3" class="tabcontent" style="display:none">
  <h3>Passenger 3</h3>
  <center>
<form method="post" action="teb.php">
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
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>

<div id="p4" class="tabcontent" style="display:none">
  <h3>Passenger 4</h3>
  <center>
<form method="post" action="teb.php">
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
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>

<div id="p5" class="tabcontent" style="display:none">
  <h3>Passenger 5</h3>
  <center>
<form method="post" action="teb.php">
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
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>

<div id="p6" class="tabcontent" style="display:none">
  <h3>Passenger 6</h3>
 <center>
<form method="post" action="teb.php">
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
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>

<div id="p7" class="tabcontent" style="display:none">
  <h3>Passenger 7</h3>
  <center>
<form method="post" action="teb.php">
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
<form method="post" action="teb.php">
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
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>

<div id="p9" class="tabcontent" style="display:none">
  <h3>Passenger 9</h3>
  <center>
<form method="post" action="teb.php">
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
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>

<div id="p10" class="tabcontent" style="display:none">
  <h3>Passenger 10</h3>
  <center>
<form method="post" action="teb.php">
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
<input type="submit" name="update" value="Update"><br>
</form>
</center>
</div>
<hr>
<br><br>
<center>
 <form name="submitpass" action="confirm.php">
 <input type="submit" name="submit" value="Submit">
 </form><br>
<p><font color="gray"><u>Elements marked with a red star are mandatory.</u></font></p>
</center>
<script src="jquery.js"></script>
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
 var par=5;
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

  document.getElementById('submit1').onclick = function() {
    var fname=document.getElementById('fname1').value;
    var lname=document.getElementById('lname1').value;
    var age=document.getElementById('age1').value;
    var aadhar=document.getElementById('aadhar1').value;
  // $('#hide').load("enter.php",{'fname': fname, 'lname': lname,'age': age, 'aadhar' : aadhar});
}​;​

</script>
</body>
</html>