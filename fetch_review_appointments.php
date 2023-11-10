
<?php

//END POINT API
       require_once ('connection.php');


         
            
            // Query to fetch review appointments
            $sql = "SELECT * FROM `appointments` WHERE `status_send_for_review` = 'Review' ORDER BY `submitted_at` DESC;";

            $result = $conn->query($sql);
            $reviewAppointments = array();
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $reviewAppointments[] = $row;
                    

                }
            }
            
            
            
            // Send the review appointments data as JSON
            echo json_encode($reviewAppointments, JSON_PRETTY_PRINT);
            ?>