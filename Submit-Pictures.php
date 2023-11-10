
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
	--yellow: #feb60a;
	--red: #ff0062;
	--blue: #00dbf9;
	--violet: #da00f7;
}
	body {
	margin: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	background-color: #1a1940;
  background-image: linear-gradient(180deg, rgba(0,0,0,0.15) 0%, rgba(0,153,212,0) calc(15% + 100px), rgba(0,99,138,0) calc(85% + 100px), rgba(0,0,0,0.15) 100%);
}
div.container {
	display: flex;
	justify-content: center;
	align-items: center;
}
div > div {
	width: 3vw;
	height: 3vw;
	border-radius: 100%;
	margin: 2vw;
	background-image: linear-gradient(145deg, rgba(255,255,255,0.5) 0%, rgba(0,0,0,0) 100%);
	animation: bounce 1.5s 0.5s linear infinite;
}
.yellow {
	background-color: var(--yellow);
}

.red {
	background-color: var(--red);
	animation-delay: 0.1s;
}

.blue {
	background-color: var(--blue);
	animation-delay: 0.2s;
}

.violet {
	background-color: var(--violet);
	animation-delay: 0.3s;
}

@keyframes bounce {
	0%, 50%, 100% {
		transform: scale(1);
		filter: blur(0px);
	}
	25% {
		transform: scale(0.6);
		filter: blur(3px);
	}
	75% {
		filter: blur(3px);
		transform: scale(1.4);
	}
}
    </style>
</head>
<body>
<div class="container">
	<div class="yellow"></div>
	<div class="red"></div>
	<div class="blue"></div>
	<div class="violet"></div>
</div>
</body>
</html>








<?php
// Include your connection.php file for database connection
require_once('connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Specify the target upload directory (adjust the path)
    $base_upload_directory = 'C:/xampp/htdocs/Zppsu_Medical/Php_logics/FileDirectory/';

    // Retrieve the student ID from the form (assuming you have a hidden input field with name="studentId")
    $id = isset($_POST['studentId']) ? $_POST['studentId'] : null;

    if ($id !== null) {
        // Specify the target upload directory for the student based on their ID
        $student_upload_directory = $base_upload_directory . $id . '/';

        // Create the directory if it doesn't exist
        if (!file_exists($student_upload_directory)) {
            if (mkdir($student_upload_directory, 0755, true)) {
             
            } else {
                echo "<script>alert('Failed to create user folder'); </script>.";
            }
        }

        // Display the loading modal
        echo '<div id="loading-modal" class="modal">
                <div class="modal-content">
                    <div class="loader"></div>
                   
                </div>
              </div>';
        
        // Output JavaScript to hide the loading modal when processing is complete
        echo '<script>
                setTimeout(function() {
                    document.getElementById("loading-modal").style.display = "none";
                    window.location.href = "http://localhost/Zppsu_Medical/Student_Status/Nurse_Student_Status.php"; // Replace with your desired page URL
                }, 3000); // Adjust the delay (in milliseconds) and URL as needed
              </script>';

        // Rest of your code remains the same...
        // Process each uploaded file
        foreach ($_FILES['fileToUpload']['tmp_name'] as $key => $tmp_name) {
            // Get the uploaded image details
            $image_temp_path = $tmp_name;
            $image_filename = basename($_FILES['fileToUpload']['name'][$key]);

            $target_path = $student_upload_directory . $image_filename;

            if (move_uploaded_file($image_temp_path, $target_path)) {
                // Insert image record into the appointment_images table with 'id' copied to 'img_id'
                $sql = "INSERT INTO `appointment_images` (`image_id`, `image_filename`, `image_path`) VALUES ('$id', '$image_filename', '$target_path')";

                if (mysqli_query($conn, $sql)) {
                    
                } else {
                    echo "Error inserting image '$image_filename': " . mysqli_error($conn);
                }
            } else {
                //handle error 
            }
        }

        exit; // Exit to prevent further processing
    } else {
        echo "Student ID is missing.";
    }
} else {
    echo "Form not submitted.";
}

// Close the database connection (if not done in connection.php)
mysqli_close($conn);
?>
