

<html>
<head>
<link rel="stylesheet" href="tab.css"/>
<style type="text/css">
	.form_new_start{
		margin-left: 30px;
		margin-top: 20px;
	}

	.submitb{
    background-color: #36AB12;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    font-family: Arial Black;
    font-size: 18;
    margin: 4px 2px;
    cursor: pointer;
    border-radius:7px;
}

.submitb:hover{
background-color:#2B870F;
}
</style>
<script>
function
</script>
</head>
<body>
<center>
<h2>ENTER DETAILS</h2>
</center>
<center>
<div class="form_new_start">
<form method="post" action="p1.php">    
<input type="hidden" name="submitted" value="true">
<span> Name: </span>
<input type="text" size="30" name="name" value="" placeholder="Name">
<br><br><br>
<span>Email: </span>
<input type="text" size="30" name="email" value="" placeholder="Email">
<br><br><br>
<span>Mobile: </span>
<input type="text" size="30" name="phone" value="" placeholder="Mobile">
<br><br><br>
<span>Date: </span>
<input type="Date" size="25" name="date" id="datepicker1" value="" style="width:200px;" placeholder="Date">
<br><br><br>

<!--<span> City: </span>
<input type="text" size="30" name="jfld_city" value="" placeholder="City">
<br><br><br>-->
<p><span>Timing: </span>
<input type="radio" name="jfld_timing" value="Morning" checked=""> Morning(7:30-10:30)<input type="radio" name="timing" value="Evening"> Evening(6:00-9:00)</p>
<br><br><br>
<input type="submit" size="20" value="Submit">
</form>
</center>
</body>
</html>
