<?php
include_once 'connectrform.php';
if(isset($_POST['Request']))
{    
     $name = $_POST['name'];
     $rollno = $_POST['rollno'];
     $roomno = $_POST['roomno'];
     $outpasstype= $_POST['outpasstype'];
     $outdate= $_POST['odate'];
     $indate= $_POST['idate'];
     $outtime= $_POST['otime'];
     $intime= $_POST['itime'];
     $place= $_POST['place'];
     $sql = "INSERT INTO requestform(name,rollno,roomno,outpasstype,outdate,indate,outtime,intime,place)
     VALUES ('$name', '$rollno', '$roomno', '$outpasstype', '$outdate', '$indate', '$outtime',  '$intime', '$place')";
     if (mysqli_query($conn, $sql)) {
        echo "successful";

     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>