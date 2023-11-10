<?php
require_once('config.php');

// Test the constants and configurations from config.php
echo "ROOT_PATH: " . ROOT_PATH . "<br>";
echo "CONNECTION_PATH: " . CONNECTION_PATH . "<br>";

// Test the database connection
if ($conn) {
    echo "Database connection is working.";
} else {
    echo "Database connection failed: " . $conn->connect_error;
}
?>