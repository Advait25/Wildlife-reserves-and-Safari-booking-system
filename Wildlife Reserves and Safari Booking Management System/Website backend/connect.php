<html>
<body>
<?php
    $con=mysqli_connect("localhost", "root", "", "sl1");
    if(mysqli_connect_errno())
    {
    	echo "Connection Failed:".mysqli_connect_error();
    }
    else
    	echo "CONNECTION ESTABLISHED SUCCESSFULLY!";

    $sql ="SELECT * FROM safari";
    $result=mysqli_query($con,$sql);
    ?>
    <table>
    <thead>
        <tr>
            <th>SAFARI_ID</th>
            <th>TIMING</th>
            <th>AM/PM</th>
            <th>VEHICLE</th>
            <th>CAPACITY</th>
            <th>AVAILABLE_SEATS</th>
            <th>COST_PERHEAD</th>
            <th>RESERVE_NAME</th>
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
            
         <th><?php echo $row['Saf_ID'];?> </th>
         <th><?php echo $row['Timing'];?> </th>
         <th><?php echo $row['AM/PM'];?> </th>
         <th><?php echo $row['Vehicle'];?> </th>
         <th><?php echo $row['Capacity'];?> </th>
         <th><?php echo $row['Available_Seats'];?> </th>
         <th><?php echo $row['Cost_Perhead'];?> </th>
         <th><?php echo $row['Rs_Name'];?> </th>
         <th><a href="nop.html"><u>BOOK</u></a></th>
      <br>

     <?php
        } 
        ?>  
        </tr>
        <?php
    }     
    ?> 
   </tbody>
</body>
</html>
