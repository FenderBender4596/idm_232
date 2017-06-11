<?php include 'includes/larryResumeData.php'; ?>


<?php 
$query = "SELECT * FROM larry_resume";
$result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_row($result)) {
      var_dump($row);
      echo "<hr>";
    }

?>