<?php include("../config/constants.php") ?>

<?php

    $id;
    
    if($_GET['id']){
        $id = $_GET['id'];

    }else{
        header('Location: ../login.html'); 
    }

    if($id !== '$2y$10$ZWgo8yx0NXkYXvWHoBtFDeIK2necm.j5.j1r.FJeuXdF.rGDyTFX2'){
        header('Location: ../login.html');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon" />
    <title>FKA ADMINS</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/reg-box.css" />
</head>

<body>

    <main class="main-content">
        <div class="wrapper">
            <h2>Manage Admins</h2>
            <br><br>
            <table class="tbl-full">
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Registration Number</th>
                    <th>Registration Date</th>
                    <th>Admin Status</th>
                    <th>Actions</th>
                </tr>

                <?php 
                    $sql = "SELECT * FROM users";
                    
                    $res = mysqli_query($conn, $sql);

                    if($res == TRUE){
                        $count = mysqli_num_rows($res);

                        $sn = 1;
                        if($count > 0){
                            while ($rows = mysqli_fetch_assoc($res)) {
                                    $id = $rows['id'];
                                    $name = $rows['name'];
                                    $phone = $rows['phone'];
                                    $password = $rows['password'];
                                    $reg_number = $rows['reg_number'];
                                    $reg_date = $rows['reg_date'];
                                    $is_admin = $rows['is_admin'];

                                ?>
                <?php

                        if($is_admin == 1){

                ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $reg_number; ?></td>
                    <td><?php echo $reg_date; ?></td>
                    <td><?php if ($is_admin == 0) {
                            echo 'false'; }else if ($is_admin == 1) { echo 'true'; } else { echo 'undefined'; } ?>
                    </td>
                    <td>
                        <?php
                        
                            if($reg_number != 1672267785215){

                        ?>

                        <a href="<?php echo SITEURL; ?>admin/remove-admin.php?id=<?php echo $id; ?>"
                            class="btn btn-danger">Remove as Admin</a>

                        <?php

                            }
                        
                        ?>
                    </td>
                </tr>

                <?php
                    }

                    ?>


                <?php
                            }
                        }else{
                            //* We do not have data in database
                        }
                    }

                ?>
            </table>
        </div>
    </main>

    <?php include("./partials/footer.php");
    echo password_hash('NaYouKnow123@gmail.com_#', PASSWORD_DEFAULT); ?>