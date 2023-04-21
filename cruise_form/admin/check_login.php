<?php
// Check Login

require "../utils/data_layer.php";

// If the request is POST -- meaning that a form posted data to this page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Start the PHP session
    session_start();

    // Obtain the username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database
    $sql = "SELECT username, password FROM admin WHERE username='$username' and password='$password'";
    
    $results = queryDatabase($sql);

    if (mysqli_num_rows($results) > 0) {
        $_SESSION['adminuser'] = $username;
        // If the username/password combo is found: set the session data & renavigate to list_entries.php
        header('location: list_entries.php');
    } else {
        // If the username/password combo isn't found, navigate back to the login page
        header('location: admin_login.php');
    }
   

} else {

    // Send the user back to the login page
    header('location: admin_login.php');

}