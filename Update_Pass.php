<?php

require_once ('connection.php');


// Initialize a counter variable
$passCount = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $studentId = $_POST["id"]; // Get the student's ID from the POST request
    $passed = "Pass"; // Update to "Pass" with an uppercase 'P'
    
    // Construct the SQL query to update the status to "Pass"
    $sql = "UPDATE appointments SET status = ? WHERE id = ?";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the statement
        $stmt->bind_param("si", $passed, $studentId); // Assuming 'id' is an integer

        // Execute the SQL statement
        if ($stmt->execute()) {
            // Update was successful
            echo "Status updated to 'Pass' for student with ID $studentId.";
            // Increment the pass count
            $passCount++;
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
}

// Query the database to get the total count of students with a status of "Pass"
$sql = "SELECT COUNT(*) AS passCount FROM appointments WHERE status = 'Pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $passCount = $row["passCount"];
}

// Close the database connection

// Display the pass count on your page

?>
