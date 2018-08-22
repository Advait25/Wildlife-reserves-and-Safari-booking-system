<?php
session_start();

if(isset($_POST['submitted']))
{
    include('connection.php');
    $email = $_POST['email'];
    $sql12 = "SELECT * from feedback where Book like '%$email%'";
$result100 = mysqli_query($con,$sql12);
    $row100 = mysqli_fetch_assoc($result100);
    $reserve = $row100['RESERVE'];
    echo "YOU HAVE VISITED &nbsp &nbsp";echo $reserve;echo "WILDLIFE RESERVE";
    $_SESSION['reserve']=$reserve;
}
?>


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
<a href="homework.php" style="text-decoration: none;">
  <i class="material-icons" style="background-color: #2ACC11; color: #fff; padding: 5px;">home</i>
</a></div>

<br><br>
<h2 align="center"><font color="#f1e751">Please Give Your Feedback</font></h2>
<br><br>

<form action="thanks.php" method="post" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:20px; padding-left:100px;" >  
  <input type="hidden" name="submitted" value="true"> 
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
      </div><br><br>
   Enter your comments here.We will try to pass it on to the reserve authority
          <br><br>Comments :<br>
         <textarea rows = "5" cols = "50" name = "description">
          
         </textarea><br><br>
      
      <center>
      <input type="submit" value="SUBMIT RATINGS"  style="padding: 7px; border-color: #DC8412; border-radius: 5px;  background-color: #DC8412; color: #fff; font-size: 20px; margin-left: 10px; font-weight: bold;">
      </center>

  
  <br><br><br><br>

  
</form><br>

</div>
</body>
</html>