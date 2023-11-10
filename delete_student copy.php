<?php

require_once ('connection.php');





if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $studentId = $_POST["id"]; // Get the student's ID from the POST request

    
    $sql = "DELETE FROM appointments WHERE id = ?";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        
        $stmt->bind_param("i", $studentId); 

        
        if ($stmt->execute()) {
            // Deletion was successful
            echo "Student with ID $studentId has been deleted successfully.";
        } else {
            
            echo "Error: " . $stmt->error;
        }

       
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
