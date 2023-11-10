<?php

// Include the database connection file

require_once ('connection.php');


// Check the connection

// Check if a search term is provided (you can replace this with your JavaScript AJAX logic)
if (isset($_GET['search_term'])) {


    $searchTerm = $_GET['search_term'];

    // Define the SQL query with a prepared statement
    $sql = "SELECT * FROM appointments WHERE id = ? OR name LIKE ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind the parameters
        $searchParam = "%$searchTerm%"; // Add wildcards for the LIKE clause
        $stmt->bind_param("ss", $searchTerm, $searchParam);

        // Execute the query
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Check if there are results
        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Department</th>";
            echo "<th>Status</th>";
         
            echo "</tr>";

            while ($row = $result->fetch_assoc()) {
                // Access the appointment data here
                $id = $row["id"];
                $name = $row["name"];
                $department = $row["department"];
                $status = $row["status"];
                
                // Output the data as HTML inside the modal
                echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['course'] . '</td>';
                    echo '<td>' . $row['status'] . '</td>';
                    echo '<td>';
                    
                    

                    echo '</td>';
                    echo '</tr>';
            }

            echo "</table>";
        } else {
            echo "<p>No appointments found for the specified ID or name.</p>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error in preparing the statement.";
    }

    // Close the database connection

}

?>
