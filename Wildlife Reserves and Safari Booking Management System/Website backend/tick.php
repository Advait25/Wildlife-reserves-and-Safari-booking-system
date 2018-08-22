<html>
<style>
        table, th {
    border: 2px solid black;
    border-collapse: collapse;
    font-size: 15px;
    font-family: Helvetica;
    font-weight: 800;
}
        td {
    border: 2px solid black;
    border-collapse: collapse;
    font-size: 15px;
    font-family: Helvetica;
    font-weight: normal;           
        }
th, td {
    padding: 15px;
}
</style>


<body>
<?php
   session_start();
    $con=mysqli_connect("localhost", "root", "", "wildlife");
    if(mysqli_connect_errno())
    {
    	echo "Connection Failed:".mysqli_connect_error();
    }
    else
    	echo "CONNECTION ESTABLISHED SUCCESSFULLY!";
     ?>
    <br><br>
<?php
    $sql ="SELECT * FROM passenger where B_id='$_SESSION[email]' ";
    $result=mysqli_query($con,$sql);
    $sql1 = "SELECT COUNT(*) AS count FROM passenger where B_id='$_SESSION[email]'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $count = $row1['count'];
    echo "NUMBER OF PASSENGERS:&nbsp";echo $count;
     ?>
    <br>
<?php
    $update = "UPDATE safari set Available_Seats=Available_Seats-'$count' where Saf_ID ='$_SESSION[safid]'";

    ?>
    <br><br>
<?php
    if(!mysqli_query($con,$update))
    {
            die('error updating');
    }
    $calculate ="SELECT (Cost_Perhead *'$count') as TOTAL_COST from safari where Saf_ID ='$_SESSION[safid]'";
    $result2 = mysqli_query($con,$calculate);
    $row2 = mysqli_fetch_assoc($result2);
    $amount = $row2['TOTAL_COST'];
    echo "TOTAL COST:&nbsp";echo $amount;
     ?>
    <br><br>
<?php
    if(!mysqli_query($con,$calculate))
    {
            die('error cost');
    }
    echo "TIMING OF THE SAFARI:";echo $_SESSION['time'];
    ?>
    <table>
    <thead>
        <tr>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>AGE</th>
            <th>AADHAR CARD NUMBER</th>
            <th>BOOKER ID</th>
            <th>SAFARI ID</th>
            <th>RESERVE NAME</th>
            <th>TRAVEL DATE</th>
       </tr>
    </thead>
    <tbody>
     <?php   
    if(mysqli_num_rows($result) > 0)
    {
         while($row=mysqli_fetch_assoc($result))
         {
            ?>
            <tr>
            
         <th><?php echo $row['fname'];?> </th>
         <th><?php echo $row['lname'];?> </th>
         <th><?php echo $row['age'];?> </th>
         <th><?php echo $row['adhaar'];?> </th>
         <th><?php echo $row['B_id'];?> </th>
         <th><?php echo $_SESSION['safid'];?> </th>
         <th><?php echo $_SESSION['reserve'];echo "&nbsp NATIONAL PARK"?> </th>
         <th><?php echo $_SESSION['date'];?> </th>
      <br>

     <?php
        } 
        ?>  
        </tr>
        


        <?php
    }     
    ?> 
   </tbody><br><br><br><br><br>
   <div style="float:right;"">
   <p>WOULD YOU LIKE TO PRINT YOUR TICKET?</p>
   <button onclick="myFunction()">PRINT TICKET</button>
   </div>
   <script>
    function myFunction() {
    window.print();
}
</script>
</body>
</html>
