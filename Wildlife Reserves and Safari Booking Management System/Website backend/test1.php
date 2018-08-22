<?php
session_start();

if(isset($_POST['submitted']))
{
    include('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $sqlinsert = "INSERT INTO booking_details (Name,Email,Mobile_no,BDate) values ('$name','$email',$phone,'$date')";
    if(!mysqli_query($con,$sqlinsert))
    {
            die('error');
    }
    $_SESSION['email']=$email;
    echo " Record Added successfully";
}


?>
<html>
<body>
<form name="NOP" action="final2.php" method="post">
Your registered booking id is:     
<input type="text" name="mail"  value=<?php echo $email?> disabled ><br><br>    
Enter the number of passengers :
<input type="number" name="num" id="000" min="1" max="10"><br><br><br>
</div>
<center>
<input type="submit" name="submit" value="Submit"> 
</center>
</form>
</body>
</html>