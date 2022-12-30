<?php include("config/constants.php") ?>
<?php include("admin/partials/header.php") ?>


<?php
  // Start session
  $user = $_SESSION['user'];

  $id = $_GET['id'];

  if($user['id'] != $id){
    header("Location: login.html");
  }
?>

<?php 

  if(!$user){
    header($location);
  }

?>

<main class="profile-body">
    <div class="content-wrapper">
        <a class="logo-wrapper" href="index.html">
            <div class="logo">
                <img src="./Images/logo.png" alt="finkoach academy logo" />
                <p>Finkoach Forex Academy</p>
            </div>
        </a>
        <br><br>

        <h1>Your Profile</h1>
        <br>

        <div class="info-box">
            <p>Name: <?php echo $user['name']; ?></p><br>
            <p>Phone: <?php echo $user['phone']; ?></p><br>
            <p>Registration Number: <?php echo $user['reg_number']; ?></p><br>
            <p>Registration Date: <?php echo $user['reg_date']; ?></p><br>
            <button class="btn btn-danger" type="button" id="change-password-link">Change Password</button>
            <?php 
        
          if($user['is_admin'] == 1){

        ?>
            <a target="_blank" href="<?php echo SITEURL . 'admin/manage-users.php?id=' . $user['id'] ?>"
                class="btn btn-secondary" type="button">Manage
                Users</a>

            <?php
          }

        ?>
        </div>

        <div class="change-password-container">
            <h2>Change Password</h2>
            <form action="change-password.php" method="post">
                <label for="password">New Password: <input type="password" name="password" id="password"></label>
                <input type="submit" value="Change Password" id="change-password-btn" class="btn btn-danger">
            </form>

            <a href="#" id="cancel-change-password">Cancel</a>
        </div>

        <br>
        <a href="logout.php">Logout</a>
    </div>
    <img src="Images/illustration.png" class="profile-illustration"
        alt="a minimalistic illustration of wave form lines" />
</main>

<?php include("admin/partials/footer.php"); ?>