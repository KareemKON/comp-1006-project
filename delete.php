<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require("_connect.php");
  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "DELETE FROM supers WHERE id = {$_GET['id']}");

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  if (session_status() === PHP_SESSION_NONE) session_start();

  if($result) {
    $_SESSION['success'] = "The person was successfully deleted.";
  } else {
    $_SESSION['error'] = "Could not delete the person." . mysqli_error($conn);
  }

  header("Location: notification.php");
  exit();

  
  // TOTAL POINTS POSSIBLE: 38
?>