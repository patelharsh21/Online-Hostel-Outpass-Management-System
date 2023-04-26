<?php      
    include('connection.php');  
     
    $rollno = $_POST['rollno'];  
      

        $check = stripcslashes($rollno);  
 
        $check = mysqli_real_escape_string($con, $rollno);  
      
        $sql = "select * from security where  rollno = '$rollno'";  
        $result = mysqli_query($con, $sql);  

        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Permitted </center></h1>";  
            $sql = "delete from security where  rollno = '$rollno'";  
            $result = mysqli_query($con, $sql);  
        }  
        else{  
            echo "<h1> Not permitted.</h1>";  
        }     
?>