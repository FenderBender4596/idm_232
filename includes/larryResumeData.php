<?php  
// $host = $_SERVER['HTTP_HOST'];
// if ($host == 'localhost') {
//   // Local database credentials
//   $dbhost = "localhost";
//   $dbuser = "root";
//   $dbpass = "root";
//   $dbname = "idm232_larry";
// }
// else {
//   // Remote database credentials
//   $dbhost = "localhost";
//   $dbuser = "jacob4596";
//   $dbpass = "kody4596";
//   $dbname = "idm232_larry";
// }

// $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// if (mysqli_connect_errno()) {
//   die("Database connection failed: " .
//     mysqli_connect_error() .
//     " (" . mysqli_connect_errno() . ")"
//   );
// }

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "idm232_larry";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }

?>

