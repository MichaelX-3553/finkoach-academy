<?php include('config/constants.php'); ?>

<?php

  // Retrieve form data
  $reg_number = $_POST['reg_number'];
  $password = $_POST['password'];

  // Retrieve user data from database
  $sql = "SELECT * FROM users WHERE reg_number='$reg_number'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // User found
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
      // Password is correct
      session_start();
      $_SESSION['user'] = $user;
      $id = $user['id'];
      header("Location: profile.php?id=$id");
      exit;
    } else if(!password_verify($password, $user['password'])) {
      // Password is incorrect
      header("Location: login.html");
      exit;
    }
  } else {
    // User not found
    header("Location: login.html");

    // Close connection
    mysqli_close($conn);
    exit;
  }
  
?>