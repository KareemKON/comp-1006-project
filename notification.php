<?php

  require("_header.php");

  // Step 1: (1 point) Start your session
  // CREATE YOUR SESSION START BELOW THIS LINE
  if (session_status() === PHP_SESSION_NONE) session_start();
  // Step 2: (4) Redirect the user if they don't have a notification
  // CREATE YOUR REDIRECT LOGIC BELOW THIS LINE
  
  // Step 3: (5) Output the notification and clear it from the session (once it's outputted)
  // CREATE YOUR NOTIFICATION OUTPUT AND CLEAR BELOW THIS LINE
?>
<div class="container">
  <?= isset($_SESSION['success']) ? $_SESSION['success'] : null; ?>
  <?= isset($_SESSION['error']) ? $_SESSION['error'] : null; ?>
</div>

<?php
  unset($_SESSION['error']);
  unset($_SESSION['success']);

  // TOTAL POINTS POSSIBLE: 10
?>

<br>
<a class="btn btn-primary" href="index.php">Home</a>