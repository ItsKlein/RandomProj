<?php

require_once ('connection.php');



if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    // Get and sanitize the student's ID from the POST request
    $studentId = filter_var($_POST["id"], FILTER_VALIDATE_INT);

    if ($studentId !== false) {
        
        
        $sql = "UPDATE appointments SET status = 'Review', status_send_for_review = 'Review' WHERE id = ?";

        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            
            $stmt->bind_param("i", $studentId); 

            // Execute the SQL statement
            if ($stmt->execute()) {
                // Update was successful
                echo "Appointment with ID $studentId has been sent for review.";
                
                
            } else {
                // Update failed
                echo "Error: Appointment update failed.";
                
            }

            // Close the statement
            $stmt->close();
        } else {
            // Error in preparing the statement
            echo "Error: Statement preparation failed.";
            
        }
    } else {
        echo "This will send the student to for the review";
    }
} else {
    
    
}



// Close the database connection

?>
