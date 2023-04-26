
<?php
// include database connection file
include_once("database.php");

// Get id from URL to delete that user
$rollno = $_GET['rollno'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "UPDATE requestform SET status='accepted' WHERE rollno='$rollno'");

// After delete redirect to Home, so that latest user list will be displayed.
//header("Location:status_accept.php");
?>

