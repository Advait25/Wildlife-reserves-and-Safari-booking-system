<!DOCTYPE html>
<html>
<body>
    <style>
        table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
    </style>
<?php
    include('connection.php');
    $sql ="SELECT * FROM reserve order by AVERAGE DESC limit 3";
    $result = mysqli_query($con,$sql);
?>
<table>
    <thead>
        <tr>
            <th>AVERAGE</th>
            <th>RESERVE NAME</th>
            <th>AREA COVERED</th>
            <th>BEST MONTHS TO VISIT</th>
            <th>INFORMATION LINK</th>
            
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
        <th><font color="dark yellow"><?php echo $row['AVERAGE'];?></font> </th>    
         <th><font color="dark yellow"><?php echo $row['Res_Name'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Area_Covered(sqkm)'];echo "sqkm"?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Best_Months'];?></font> </th>
         <th><font color="dark yellow"><a href="<?php echo $row['Info_Link'];?>"><?php echo $row['Info_Link'];?></font> </th>

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
    else
        echo "Sorry No matches found!"     
    ?> 
</body>
</html>
