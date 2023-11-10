<?php

require 'connection.php';


// Initialize the doctor count
$doctor_count = 0;

// Construct the SQL query to count rows where 'status_send_for_review' is 'Review'
$sql = "SELECT COUNT(*) AS doctor_count FROM appointments WHERE status_send_for_review = 'Review'";

// Execute the SQL query
$result = $conn->query($sql);

if ($result) {
    // Fetch the result
    $row = $result->fetch_assoc();

    // Get the count
    $doctor_count = $row['doctor_count'];

    // Check if 'status' has changed to 'Pass'
    $sql_pass_count = "SELECT COUNT(*) AS pass_count FROM appointments WHERE status = 'Pass'";

    // Execute the SQL query
    $result_pass_count = $conn->query($sql_pass_count);

    if ($result_pass_count) {
        // Fetch the result
        $row_pass_count = $result_pass_count->fetch_assoc();

        // Get the count
        $pass_count = $row_pass_count['pass_count'];

        // If 'status' is 'Pass', set the doctor count to 0
        if ($pass_count > 0) {
            $doctor_count = 0;
        }

        
    } else {
        // Query execution failed for pass count
        echo "Error: " . $conn->error;
    }
} else {
    // Query execution failed
    echo "Error: " . $conn->error;
}


?>
