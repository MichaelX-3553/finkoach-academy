<?php include("config/constants.php") ?>
<?php include("admin/partials/header.php") ?>

<?php

    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        // Get the user
        $user = mysqli_fetch_assoc($result);
        $reg_number = $user['reg_number'];

?>

<div class="login-details-wrapper">
    <div class="login-details">
        <h1>You have been registered successfully!</h1>
        <p><strong>Your Registration Number is: <?php echo $reg_number; ?></strong></p>
        <p class="red-text">Make sure you copy it!</p>
        <a href="login.html">Click here to login</a>
    </div>
</div>

<?php
        mysqli_close($conn);
        exit;
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ?>

<?php include("admin/partials/footer.php") ?>