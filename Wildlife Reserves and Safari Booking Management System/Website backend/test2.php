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
session_start();
if(isset($_POST['submitted']))
{
    include('connection.php');
    $val = $_POST['submit'];
    $sql ="SELECT * from safari where Rs_Name like '%$val%'" ;
    $result=mysqli_query($con,$sql);
    $_SESSION['reserve']=$val;
    
}
?>
<table>
    <thead>
        <tr>
            <th>SAFARI</th>
            <th>VEHICLE</th>
            <th>CAPACITY</th>
            <th>AVAILABLE SEATS</th>
            <th>PACKAGE</th>
            <th>SAFARI BOOKING</th>
            <!--<th>AREA COVERED</th>
            <th>WORKING MONTHS</th>
            <th>BEST MONTHS TO VISIT</th>
            <th>INFORMATION LINK</th>
            <th>COMMON NAME</th>
            <th>SCIENTIFIC NAME</th>
            <th>HABITAT</th>
            <th>CATEGORY</th>
            <th>NATIVITY</th>
            <th>ACTIVE TIME</th>
            <th>DIET TYPE</th>
            <th>COVERING</th>
            <th>NUMBER OF LEGS</th>
            <th>PRIMARY COLOR</th>
            <th>MIGRATION PERIOD</th>-->
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
         <th><font color="dark yellow"><?php echo $row['Saf_ID'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Vehicle'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Capacity'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Available_Seats'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Cost_Perhead'];?></font> </th>
         <th><form action="newn.php" method="post"><input type="hidden" name="submitted" value="true"> 
CLICK TO BOOK SAFARI<input type="submit" name="submit" value=<?php echo $row['Saf_ID'];?>></form></th>
     <!--<th><font color="dark yellow"><?php echo $row['Area_Covered(sqkm)'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Working _Months'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Best_Months'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Info_Link'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Common_Name'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Sci_Name'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Habitat'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Category'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Nativity'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Active_Time'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Diet_Type'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Covering'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['legged'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['P_color'];?></font> </th>
         <th><font color="dark yellow"><?php echo $row['Migration_Period'];?></font> </th>
         <th><font color="dark yellow"><a href="test.php">CLICK HERE TO BOOK A TICKET</a></font></th>-->
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
      ?>   
        <h2 align="center">SORRY!NO MATCHES FOUND. </h2>   
            <?php
    ?> 
</body>
</html>
