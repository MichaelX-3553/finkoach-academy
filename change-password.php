<?php include("config/constants.php") ?>

<?php

  // Retrieve form data
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Update user password in database
  $user = $_SESSION['user'];
  $id = $user['id'];
  $sql = "UPDATE users SET password='$password' WHERE id='$id'";
  if (mysqli_query($conn, $sql)) {
    
    header("Location: profile.php?id=$id");

  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);

?>