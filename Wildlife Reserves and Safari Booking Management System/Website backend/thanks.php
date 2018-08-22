<?php
session_start();

if(isset($_POST['submitted']))
{
    include('connection.php');
    $star = $_POST['star'];
  $sql ="UPDATE reserve set rating =rating +'$star' where Res_Name like '%$_SESSION[reserve]%'";
  if(!mysqli_query($con, $sql))
    {
      die('error updating');
    }
    $sql1="UPDATE reserve set Review_Count = Review_Count + 1 where Res_Name like '%$_SESSION[reserve]%'";
    if(!mysqli_query($con, $sql1))
    {
      die('error creating');
    }
    $sql2="SELECT average(Rating,Review_Count) as Count from reserve where Res_Name like '%$_SESSION[reserve]%'";
    $result1 = mysqli_query($con,$sql2);
    $row1 = mysqli_fetch_assoc($result1);
    $avg = $row1['Count'];
    $sql11="UPDATE reserve set AVERAGE='$avg' where  Res_Name like '%$_SESSION[reserve]%'";
    if(!mysqli_query($con, $sql11))
    {
      die('error updating average');
    }
}
?>

<html>
<head>
<style>
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

     .danke{
     	color: red;
     	font-weight: bold;
     }
</style>
</head>
<body>
<div class="floating-panel">  
<a href="homework.php" style="text-decoration: none;">
  <i class="material-icons" style="background-color: #2ACC11; color: #fff; padding: 5px;">home</i>
</a></div>
<p>Thank You for providing your feedback!<p>
</body>
</html>