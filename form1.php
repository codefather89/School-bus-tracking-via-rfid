
<html>
<body>
<?php 
$username = "root";
$password = "";
$database = "minor";
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM student";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">id</font> </td> 
          <td> <font face="Arial">mobileno</font> </td> 
          <td> <font face="Arial">username</font> </td> 
          <td> <font face="Arial">parents</font> </td> 
          <td> <font face="Arial">boarded</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
         $field1name = $row["id"];
        $field2name = $row["mobileno"];
        $field3name = $row["username"];
        $field4name = $row["parents"];
        $field5name = $row["boarded"];
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>