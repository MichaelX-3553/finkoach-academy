<?php
    //* Start Session
    session_start();

    //* Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/finkoach-academy/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'finkoach_academy');

    // Create connection
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn)); 
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>