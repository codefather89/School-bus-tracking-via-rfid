<?php
  // PHP variable to store the host address
 $db_host  = "localhost";
 // PHP variable to store the username
 $db_uid  = "root";
 // PHP variable to store the password
 $db_pass = "";
 // PHP variable to store the Database name  
 $db_name  = "minor"; 
        // PHP variable to store the result of the PHP function 'mysql_connect()' which establishes the PHP & MySQL connection  
 $db_con = mysqli_connect($db_host,$db_uid,$db_pass,$db_name) or die('could not connect');
 mysqli_select_db($db_con,$db_name);

	
    $sql="SELECT tag from rfid WHERE id = 101 ";
    $result = mysqli_fetch_array($db_con,$sql);
    echo $result['sql'];

 
    $check=mysqli_query($db_con,$sql);
    $sql1="UPDATE student SET boarded=true where tagno = '$sql'";	
    mysqli_query($db_con,$sql1);    


 mysqli_close($db_con);   
?>
