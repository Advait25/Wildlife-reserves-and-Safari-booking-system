<?php
session_start();

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

<form action="rating.php" method="post" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:20px; padding-left:100px;" >  
  <input type="hidden" name="submitted" value="true"> 
  <span>ENTER YOUR EMAIL: </span>
<input type="text" size="30" name="email" value="" placeholder="Email">
         </textarea><br><br>
      
      <center>
      <input type="submit" value="RATE US!"  style="padding: 7px; border-color: #DC8412; border-radius: 5px;  background-color: #DC8412; color: #fff; font-size: 20px; margin-left: 10px; font-weight: bold;">
      </center>

  
  <br><br><br><br>

  
</form><br>

</div>
</body>
</html>