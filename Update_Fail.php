<?php
require_once ('connection.php');


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $studentId = $_POST["id"]; // Get the student's ID from the POST request

    // Construct the SQL query to update the status to "Pass"
    $sql = "UPDATE appointments SET status = 'Fail' WHERE id = ?";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the student's ID as a parameter to the statement
        $stmt->bind_param("i", $studentId); // Assuming 'id' is an integer

        // Execute the SQL statement
        if ($stmt->execute()) {
            // Update was successful
            echo "Status updated to 'Fail' for student with ID $studentId.";
        } else {
            // Update failed
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Error in preparing the statement
        echo "Error: " . $conn->error;
    }
} else {
    // Invalid or missing parameters
    
}

// Close the database connection
?>






