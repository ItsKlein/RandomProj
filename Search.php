<?php
// Include the database connection file

require_once ('connection.php');


// Check the connection


// Check if a search term is provided (you can replace this with your JavaScript AJAX logic)
if (isset($_GET['search_term'])) {
    $searchTerm = $_GET['search_term'];
    
    // Define the SQL query based on whether the user provided an ID or a name
    $sql = "SELECT * FROM appointments WHERE id = '$searchTerm' OR name LIKE '%$searchTerm%'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Department</th>";
        echo "<th>Status</th>";
        echo "<th>Actions</th>";
        echo "</tr>";
        
        while ($row = $result->fetch_assoc()) {
            // Access the appointment data here
            $id = $row["id"];
            $name = $row["name"];
            $department = $row["department"];
            $status = $row["status"];

            // Output the data as HTML inside the modal
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$name</td>";
            echo "<td>$department</td>";
            echo "<td>$status</td>";
            echo '<td>';
            echo '<button class="delete-button" data-id="' . $row['id'] . '">Delete</button><br>';
            echo '<button class="view-button">View</button><br>';
            echo '<button class="update-pass">PASS</button><br>';
            echo '<button class="update-fail">FAIL</button>';
            echo '</td>';
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>No appointments found for the specified ID or name.</p>";
    }

    // Close the database connection
   
}
?>