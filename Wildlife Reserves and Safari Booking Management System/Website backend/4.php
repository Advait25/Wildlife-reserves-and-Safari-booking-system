<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
.error {color: #9b0808;}
.myrat{
  height: 100px;
  width: 200px;
  margin-left: 250px;
  background-color: #a1a1a1;
}
form .stars {
  background: url("stars.png") repeat-x 0 0;
  width: 150px;
  margin: 0 auto;
}
 
form .stars input[type="radio"] {
  position: absolute;
  opacity: 0;
  filter: alpha(opacity=0);
}
form .stars input[type="radio"].star-5:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-4:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-3:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-2:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-1:checked ~ span {
  width: 20%;
}
form .stars label {
  display: block;
  width: 30px;
  height: 30px;
  margin: 0!important;
  padding: 0!important;
  text-indent: -999em;
  float: left;
  position: relative;
  z-index: 10;
  background: transparent!important;
  cursor: pointer;
}
form .stars label:hover ~ span {
  background-position: 0 -30px;
}
form .stars label.star-5:hover ~ span {
  width: 100% !important;
}
form .stars label.star-4:hover ~ span {
  width: 80% !important;
}
form .stars label.star-3:hover ~ span {
  width: 60% !important;
}
form .stars label.star-2:hover ~ span {
  width: 40% !important;
}
form .stars label.star-1:hover ~ span {
  width: 20% !important;
}
form .stars span {
  display: block;
  width: 0;
  position: relative;
  top: 0;
  left: 0;
  height: 30px;
  background: url("stars.png") repeat-x 0 -60px;
  -webkit-transition: -webkit-width 0.5s;
  -moz-transition: -moz-width 0.5s;
  -ms-transition: -ms-width 0.5s;
  -o-transition: -o-width 0.5s;
  transition: width 0.5s;
}
#floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

.rateform{
  background-color: rgba(0, 0, 0, 0.7);
  color: #f1f1f1;
  font-size: 20px;
  font-family: Helvetica;
  font-weight: normal;
}
</style>
</head>
<body style="background: linear-gradient(to right bottom,#f1e751, #ffffff,#f1e751,#ffffff)"  >  
  <div class="rateform">
<div class="floating-panel">  
<a href="homework.html" style="text-decoration: none;">
  <i class="material-icons" style="background-color: #2ACC11; color: #fff; padding: 5px;">home</i>
</a></div>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "please enter your name";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "please fill out your email";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<br><br>
<h2 align="center"><font color="#f1e751">Please Give Your Feedback</font></h2>
<br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:20px; padding-left:100px;" >  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br><br><br>
   Enter your comments here.We will try to pass it on to the reserve authority
          <br><br>Comments :<br>
         <textarea rows = "5" cols = "50" name = "description">

         </textarea><br><br>
  What Can We Improve?:<br>
  &nbsp;&nbsp;&nbsp;<input type="radio" name="Improve" value="Safari Service">Safari Service<br>
  &nbsp;&nbsp;&nbsp;<input type="radio" name="Improve" value="Contact Service">Contact Service<br><br><br><br>
    
    <form id="ratingsForm">
      <center><b><font color="#f1e751">RATE YOUR TRIP:</font></b></center>
      <div class="stars">
        <input type="radio" name="star" class="star-1" id="star-1" value="1"/>
        <label class="star-1" for="star-1">1</label>
        <input type="radio" name="star" class="star-2" id="star-2" value="2"/>
        <label class="star-2" for="star-2">2</label>
        <input type="radio" name="star" class="star-3" id="star-3" value="3"/>
        <label class="star-3" for="star-3">3</label>
        <input type="radio" name="star" class="star-4" id="star-4" value="4"/>
        <label class="star-4" for="star-4">4</label>
        <input type="radio" name="star" class="star-5" id="star-5" value="5"/>
        <label class="star-5" for="star-5">5</label>
        <span></span>
      </div>
    </form><br>
  
  <br><br><br><br>

  <script>
  function myFunction() {
    var x,y,z;

    // Get the value of the input field with id="numb"
    x = document.getElementById("name").value;
    y = document.getElementById("email").value;
    z= document.getElementById("comment").value;

    if(x=="" || y=="" || z=="")
    {
        alert("One or more fields are blank");
    }
    else
      alert("Thank you for your valuable feedback");
    // If x is Not a Number or less than one or greater than 10
    
    document.getElementById("demo").innerHTML = text;
    }
    </script></p>
  <center>
  <input type="submit" name="submit" value="Submit" style="padding: 7px; border-color: #DC8412; border-radius: 5px;  background-color: #DC8412; color: #fff; font-size: 20px; margin-left: 100px; font-weight: bold;" onClick="myFunction()">  
  </center> <br><br>
</form>

</div>
</body>
</html>