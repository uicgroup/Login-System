<?php
      $servername = 'localhost';
	  $username = 'root';
      $password = '';
      $dbname='login';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
$sql = "SELECT  username, password FROM users";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  
  echo "login ok";

    // output data of each row
    // while($row = mysqli_fetch_assoc($result)) {
    //    echo "Login Welcome";
    // }
} 

else {
    echo "0 results";
}

mysqli_close($conn);

?>