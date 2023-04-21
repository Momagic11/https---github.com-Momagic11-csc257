<?php
// sessions  ***w3scools referrence***
session_start();
if (!isset($_SESSION['adminuser'])) {
    header('location: admin_login.php');
}


