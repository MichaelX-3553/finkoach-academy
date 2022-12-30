<?php include("../config/constants.php") ?>

<?php

    $id = $_GET['id'];

    $is_admin = 0;

    $sql = "UPDATE users SET is_admin='$is_admin' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {

        header('Location: manage-admins.php?id=$2y$10$ZWgo8yx0NXkYXvWHoBtFDeIK2necm.j5.j1r.FJeuXdF.rGDyTFX2');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

?>