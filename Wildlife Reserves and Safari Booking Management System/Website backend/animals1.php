<!DOCTYPE html>
<html>
<body>
    <style>
    body{
        background-color: #EFEA58;
    }
        table, th {
    border: 4px solid black;
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
<?php
if(isset($_POST['submitted']))
{
    include('connection.php');
    $legs = $_POST['legs'];
    $category = $_POST['category'];
    $diet = $_POST['diet'];
    $skin = $_POST['skin'];
    $color = $_POST['color'];
    $sql ="SELECT * FROM animilia where legged = '$legs' and Category like '%$category%' and Diet_Type like '%$diet%' and Covering like '%$skin%' and P_color like '%$color%'";
    $result=mysqli_query($con,$sql);
}
?>
<table>
    <thead>
        <tr>
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
            <th>MIGRATION PERIOD</th>
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
         <td><font color="#000"><?php echo $row['Common_Name'];?></font></td>
         <td><font color="#000"><?php echo $row['Sci_Name'];?></font> </td>
         <td><font color="#000"><?php echo $row['Habitat'];?></font> </td>
         <td><font color="#000"><?php echo $row['Category'];?></font> </td>
         <td><font color="#000"><?php echo $row['Nativity'];?></font> </td>
         <td><font color="#000"><?php echo $row['Active_Time'];?></font> </td>
         <td><font color="#000"><?php echo $row['Diet_Type'];?></font> </td>
         <td><font color="#000"><?php echo $row['Covering'];?></font> </td>
         <td><font color="#000"><?php echo $row['legged'];?></font> </td>
         <td><font color="#000"><?php echo $row['P_color'];?></font> </td>
         <td><font color="#000"><?php echo $row['Migration_Period'];?></font> </td>
         <!--<th><?php //echo $row['Cost_Perhead'];?> </th>
         <th><?php //echo $row['Rs_Name'];?> </th>
         <th><a href="nop.html"><u>BOOK</u></a></th>-->
      <br><br><font face="Verdana" color="red" size="8">
     <?php
        } 
        ?>  
        </tr>
        <?php
    }
    else
        echo "Sorry No matches found!"     
    ?> </font>
</body>
</html>
