<?php      
    $host = "localhost";  
    $user = "root";  
    $password = 'Deadpool@2003';  
    $db_name = "srec_hostel";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>

<!-- for credentials validation -->