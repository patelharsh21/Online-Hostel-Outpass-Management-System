<?php
$servername='localhost';
$username='root';
$password='Deadpool@2003';
$dbname = "srec_hostel";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>

<!-- to connect to the database -->