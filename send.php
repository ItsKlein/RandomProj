

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
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

// Include PHPMailer and Exception
require 'C:\xampp\htdocs\Zppsu_Medical\PhpMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Zppsu_Medical\PhpMailer\src\Exception.php';
require 'C:\xampp\htdocs\Zppsu_Medical\PhpMailer\src\SMTP.php'; // Include SMTP

// Rest of your PHP code

if (isset($_POST['custom_submit'])) { // Change to "custom_submit"
    // Validate and sanitize user inputs

    try {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'angellazadaxx233@gmail.com';
        $mail->Password = 'ihlqlkjkkocussny';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

		
        $mail->setFrom('angellazadaxx233@gmail.com');

        // Check if "custom_email" exists in $_POST before accessing it
        if (isset($_POST["custom_email"])) { // Change to "custom_email"
            $mail->addAddress($_POST["custom_email"]); // Change to "custom_email"
        } else {
            // Handle the case where "custom_email" is not submitted
            echo "Email address not provided.";
            exit;
        }

        $mail->isHTML(true);
        $mail->Subject = $_POST["custom_subject"]; // Change to "custom_subject"
        $mail->Body = $_POST["custom_message"]; // Change to "custom_message"

        $mail->send();

        // Optionally, provide feedback to the user indicating successful email sending
        echo '<script>
        setTimeout(function() {
            window.location.href = "http://localhost/Zppsu_Medical/index.php"; // Replace with your desired page URL
        }, 3000); // Adjust the delay (in milliseconds) and URL as needed
        </script>';
        
    } catch (Exception $e) {
        // Handle any exceptions that occur during the email sending process
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
