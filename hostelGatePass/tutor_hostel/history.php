<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM backup");
?>
<!DOCTYPE html>
<html>
 <head>
   <link rel = "stylesheet" type = "text/css" href = "style2.css">   
 <title> Requests</title>
 </head>
 <<?php include('history_header.php') ?>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<form>
  <table>
  
  <tr>
    <td>Name</td>
    <td>rollno</td>
    <td>roomno</td>
    <td>outpasstype</td>
    <td>outdate</td>
    <td>indate</td>
    <td>outtime</td>
    <td>intime</td>
    <td>place</td>
    <td>status</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["rollno"]; ?></td>
    <td><?php echo $row["roomno"]; ?></td>
    <td><?php echo $row["outpasstype"]; ?></td>
    <td><?php echo $row["outdate"]; ?></td>
    <td><?php echo $row["indate"]; ?></td>
    <td><?php echo $row["outtime"]; ?></td>
    <td><?php echo $row["intime"]; ?></td>
    <td><?php echo $row["place"]; ?></td>
    <td><?php echo $row["status"]; ?></td>


</tr>
<?php
$i++;
}
?>
</table>
</form>
 <?php
}
else{
    echo "No result found";
}
?>
 
 </body>
</html>