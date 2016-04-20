<?php
  $servername = "*******";
  $username  = "*******";
  $password = "*******";
  $dbname = "*******";

  $loc = $_POST['Location'];
  $desc = $_POST['comment'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO reports (id, location, Description, TimeOfReport) VALUES (NULL, '$loc' , '$desc' , CURRENT_TIMESTAMP)";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("Location:/geesePatrol/geesePatrol.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
