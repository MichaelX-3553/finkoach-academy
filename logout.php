<?php include('config/constants.php'); ?>

<?php
  // Start session
  session_start();

  // Destroy session
  session_destroy();

  // Location variable sets the page location in the folder directory to where the user will be redirected to depending on certain conditions

  // Redirect to login page
  header("Location: login.html");
  exit;
?>