<?php
session_start();


if (isset($_SESSION['username']) && isset($_SESSION['role'])) {
    $loggedInUser = $_SESSION['username'];
    $userRole = $_SESSION['role'];
    $userRole = "Dr. Franz Chezka ";
} else {
  
    header("Location: localhost/Zppsu_Medical/Php_Logics/login.php");
    exit();
}
?>