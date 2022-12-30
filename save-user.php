<?php include('config/constants.php'); ?>

<?php

  // Retrieve form data
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $reg_number = time() . rand(0, 999);
  $reg_date = date("Y-m-d-h-i-s");

  // Insert user data into database
  $sql = "INSERT INTO users (name, phone, password, reg_number, reg_date) VALUES ('$name', '$phone', '$password', '$reg_number', '$reg_date')";
  if (mysqli_query($conn, $sql)) {
    $new_sql = "SELECT * FROM users WHERE reg_number='$reg_number'";
    $result = mysqli_query($conn, $new_sql);
    if (mysqli_num_rows($result) == 1) {
      // Get the user
      $user = mysqli_fetch_assoc($result);
      $id = $user['id'];
      
      header("Location: user-reg-details.php?id=$id");
    }
    // Close connection
    mysqli_close($conn);
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

// ffviohivhuih4547ohk

// Close connection
mysqli_close($conn);
?>