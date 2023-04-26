
<?php
// include database connection file
include_once("database.php");

// Get id from URL to delete that user
$rollno = $_GET['rollno'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "INSERT INTO security SELECT rollno FROM requestform WHERE rollno='$rollno'");
$resul = mysqli_query($conn, "UPDATE requestform SET status='accepted' WHERE rollno='$rollno'");
$res = mysqli_query($conn, "INSERT INTO backup SELECT * FROM requestform WHERE rollno='$rollno'");
$resu = mysqli_query($conn, "DELETE FROM requestform WHERE rollno=$rollno");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:retrive.php");
?>