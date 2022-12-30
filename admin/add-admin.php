<?php include("../config/constants.php") ?>

<?php

    $id = $_GET['id'];
    $manage_id = $_GET['manage_id'];

    $is_admin = 1;

    $sql = "UPDATE users SET is_admin='$is_admin' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
    header("Location: manage-users.php?id=$manage_id");
    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }

?>