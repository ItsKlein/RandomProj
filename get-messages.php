<?php
require 'connection.php';
// Include your existing connection.php file


// Retrieve messages from the database
$sql = "SELECT sender, message, timestamp FROM messages ORDER BY timestamp ASC"; // Fetch the latest 10 messages
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output messages as HTML
    while ($row = $result->fetch_assoc()) {
        $sender = $row["sender"];
        $message = $row["message"];
        $timestamp = $row["timestamp"];

        echo "<div><strong>$sender:</strong> $message <span class='timestamp'>$timestamp</span></div>";
    }
} else {
    echo "No messages available.";
}


?>
