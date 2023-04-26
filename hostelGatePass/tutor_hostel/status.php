<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT rollno FROM requestform");
$fetch = mysqli_fetch_array($result);
$rollno = $fetch['rollno'];

    $sql = "INSERT INTO security SELECT rollno FROM requestform WHERE rollno='$rollno' && DELETE FROM requestform WHERE rollno ='$rollno'";
   
     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";


     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>
