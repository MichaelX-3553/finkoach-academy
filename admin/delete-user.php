<?php include("../config/constants.php") ?>

<?php

  // Retrieve user ID from URL
  $id = $_GET['id'];
  $manage_id = $_GET['manage_id'];

  // Delete user from database
  $sql = "DELETE FROM users WHERE id='$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location:  manage-users.php?id=$manage_id");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);
?>