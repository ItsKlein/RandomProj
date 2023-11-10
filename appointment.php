


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
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];
    $department = $_POST['department'];
    $courses = $_POST['courses'];
    $option = $_POST['option_name'];
    $message = $_POST['message'];
    $status = 'SUBMIT';

    // Use htmlspecialchars to prevent XSS
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
    $department = htmlspecialchars($department, ENT_QUOTES, 'UTF-8');
    $courses = htmlspecialchars($courses, ENT_QUOTES, 'UTF-8');
    $option = htmlspecialchars($option, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    $blood_typing = $_POST['blood-typing']; // Capture the value of "Blood Typing"
    $college_level = $_POST['CollegeLevel']; // Capture the value of "CollegeLevel"

    if (empty($name) || empty($email) || empty($phone) || empty($id) || empty($department) || empty($courses) || empty($college_level)) {
        $_SESSION['error_message'] = 'Please fill in all required fields.';
    } else {
        // Debugging: Print out SQL query and bound values
        $sql = "INSERT IGNORE INTO appointments (id, name, email, phone, department, course, option_name, message, status, blood_typing, college_level) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        //CHANGE THIS IF SERVER DEPLOYMENT
        echo '<script>
        setTimeout(function() {
            
            window.location.href = "http://192.168.124.157/Zppsu_Medical/index.php"; // Replace with your desired page URL
        }, 3000); // Adjust the delay (in milliseconds) and URL as needed
        </script>';
        
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("sssssssssss", $id, $name, $email, $phone, $department, $courses, $option, $message, $status, $blood_typing, $college_level);

            if ($stmt->execute()) {
                $_SESSION['success_message'] = 'Your appointment request has been sent successfully. Thank you!';
                exit();
            } else {
                // Debugging: Print out SQL error
                $_SESSION['error_message'] = 'Error: ' . $stmt->error;
                echo "SQL Error: " . $stmt->error;
                exit();
            }
            $stmt->close();
        } else {
            $_SESSION['error_message'] = 'Error in preparing the statement.';
            echo "Statement Error: " . $conn->error;
        }
    }
} else {
    $_SESSION['error_message'] = 'Invalid form submission.';
}
?>
