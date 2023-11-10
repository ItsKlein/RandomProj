<?php

require_once 'connection.php';



$sql = "SELECT COUNT(*) AS appointment_count FROM appointments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $appointment_count = $row["appointment_count"];
} else {
    $appointment_count = 0;
}

$appointment_count;





?>