<?php

// Why use buttons to redirect instead of
// normal link labels?




if (isset($_POST['btnAccess'])) {
    header('location: index.php');
}

session_start();
session_destroy();
unset($_SESSION['user_username']);
echo "You are now logged out";

header ("location: Login.php");



?>