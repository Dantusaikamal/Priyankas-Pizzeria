<?php      
    $host = "r1bsyfx4gbowdsis.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";  
    $user = "trwa79u42cbawfe3";  
    $password = 'j75t6k6iuafub68k';  
    $db_name = "jukem88zsy77801x";
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
