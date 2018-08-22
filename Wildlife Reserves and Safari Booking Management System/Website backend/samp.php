<?php
if(isset($_POST['submitted']))
{
	include('connection.php');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sqlinsert = "INSERT INTO sam (fname,lname) VALUES ('$fname','$lname')";
	if(!mysqli_query($con, $sqlinsert))
	{
		die('error');
	}
    echo "record inserted";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Enter</h1>
<form method="post" action="samp.php">
<input type="hidden" name="submitted" value="true">	
<fieldset>
	<legend>New people</legend>
	<label>First Name:<input type="text" name="fname"></label>
	<label>Last Name:<input type="text" name="lname"></label>
</fieldset>
<input type="submit" value="Submit">	
</form>
<?php
echo $newrec
?>
</body>
</html>>
