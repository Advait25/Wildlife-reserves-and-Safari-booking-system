<?php
    $con=mysqli_connect("localhost", "root", "", "sl1n");
    if(mysqli_connect_errno())
    {
    	echo "Connection Failed:".mysqli_connect_error();
    }
    else
    	echo "CONNECTION ESTABLISHED SUCCESSFULLY!";
?>