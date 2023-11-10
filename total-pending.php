<?php
require 'connection.php';



// Construct the SQL query to count rows where 'status_send_for_review' is 'Review'
$sql = "SELECT COUNT(*) AS review_count FROM appointments WHERE status_send_for_review = 'Review'";

// Execute the SQL query
$result = $conn->query($sql);

if ($result) {
    // Fetch the result
    $row = $result->fetch_assoc();

    // Get the count
    $review_count = $row['review_count'];

    // Check if 'status' has changed to 'Pass'
    $sql = "SELECT COUNT(*) AS pass_count FROM appointments WHERE status = 'Pass'";

    // Execute the SQL query
    $result = $conn->query($sql);

    if ($result) {
        // Fetch the result
        $row = $result->fetch_assoc();

        // Get the count
        $pass_count = $row['pass_count'];

        // If 'status' is 'Pass', set the review count to 0
        if ($pass_count > 0) {
            $review_count = 0;
        }

        // Output the count
        echo "Number of rows with 'status_send_for_review' set to 'Review': " . $review_count;
    } else {
        // Query execution failed
        echo "Error: " . $conn->error;
    }
} else {
    // Query execution failed
    echo "Error: " . $conn->error;
}

// Close the database connection

?>
