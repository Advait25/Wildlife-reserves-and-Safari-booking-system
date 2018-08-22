<html>
<body bgcolor="#E6E6FA">
<style>
.topnav {
  overflow: hidden;
  background-color: #167;
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
  table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
body {
    background-image:url(.jpg);
    /*background-color:#F6E396;*/
    background-size: cover;
    
    
}  
</style>
<div class="topnav" id="myTopnav">
  <a href="sample.html">HOME</a>
  <a href="coc.html">COACHES</a>
  <a href="rec.html">REVIEWS</a>
  <a href="locc.html">LOCATIONS</a>
  <a href="performance.php">PEROFORMANCE HISTORY</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div><br><br><br>
<center>
<h1 align="center"><font color="red"><b>WELCOME TO OUR HALL OF FAME</b></font></h1>    
<?php
    $con=mysqli_connect("localhost", "root", "", "reserve");
    if(mysqli_connect_errno())
    {
        echo "Connection Failed:".mysqli_connect_error();
    }
    else
       // echo "CONNECTED TO THE PEROFORMANCE HISTORY DATABASE!";

    $sql ="SELECT * FROM performance";
    $result=mysqli_query($con,$sql);
    ?>
    <table>
    <thead>
        <tr>
            <th>NAME</th>
            <th>SPORT</th>
            <th>CLUB</th>
            <th>LEVEL</th>
            <th>TOURNAMENT PLAYED</th>
            <th>COLLEGE</th>
        </tr>
    </thead>
    <tbody>
     <?php   
    if(mysqli_num_rows($result)>0)
    {
         while($row=mysqli_fetch_assoc($result))
         {
            ?>
            <tr>
            
         <th><font color="dark yellow"><?php echo $row['FULL NAME'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['SPORT'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['CLUB'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['LEVEL'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['TOURNAMENT'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['COLLEGE'];?></font> </th>
         <!--<th><?php //echo $row['Cost_Perhead'];?> </th>
         <th><?php //echo $row['Rs_Name'];?> </th>
         <th><a href="nop.html"><u>BOOK</u></a></th>-->
      <br>

     <?php
        } 
        ?>  
        </tr>
        <?php
    }     
    ?> 
   </tbody>
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
