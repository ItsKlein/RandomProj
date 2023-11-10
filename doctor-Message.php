<?php

require 'connection.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = $_POST["message"];

    // Include your existing connection.php file
  

    // Prepare the SQL statement to insert the message
    $sql = "INSERT INTO messages (sender, message) VALUES (?, ?)";
    
    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Set the sender as 'doctor'
    $sender = 'doctor';

    // Bind parameters
    $stmt->bind_param("ss", $sender, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Message from doctor inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }


   
}
?>
