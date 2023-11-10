<?php
 session_start();
?>

<?php
// Include your database connection code here
require('C:\xampp\htdocs\Zppsu_Medical\Php_Logics\connection.php');

// Initialize variables to hold user details and images
$userDetails = '';
$userImages = '';

// Retrieve user ID from the URL and sanitize it to prevent SQL injection
$user_id = intval($_GET['id']);

// Query the 'appointments' table to get user details using a prepared statement
$sql_appointments = "SELECT * FROM `appointments` WHERE `id` = ?";
$stmt_appointments = $conn->prepare($sql_appointments);
$stmt_appointments->bind_param("i", $user_id); // "i" indicates an integer parameter
$stmt_appointments->execute();
$result_appointments = $stmt_appointments->get_result();

// Check if user details are found in 'appointments' table
if ($result_appointments->num_rows == 1) {
    $user_appointments = $result_appointments->fetch_assoc();

    // Store user details in the $userDetails variable
    $userDetails .= '<h2>User Details</h2>';
    $userDetails .= '<p>Name: ' . htmlspecialchars($user_appointments['name']) . '</p>';
    $userDetails .= '<p>Email: ' . htmlspecialchars($user_appointments['email']) . '</p>';
    $userDetails .= '<p>ID: ' . $user_id . '</p>'; // No need to sanitize
    $userDetails .= '<p>Phone: ' . htmlspecialchars($user_appointments['phone']) . '</p>';
    $userDetails .= '<p>Department: ' . htmlspecialchars($user_appointments['department']) . '</p>';
    $userDetails .= '<p>Course: ' . htmlspecialchars($user_appointments['course']) . '</p>';
    $userDetails .= '<p>Option Name: ' . htmlspecialchars($user_appointments['option_name']) . '</p>';
    $userDetails .= '<p>Status: ' . htmlspecialchars($user_appointments['status']) . '</p>';
    $userDetails .= '<p>Message: ' . htmlspecialchars($user_appointments['message']) . '</p>';
    $userDetails .= '<p>Submitted At: ' . htmlspecialchars($user_appointments['submitted_at']) . '</p>';
    $userDetails .= '<p>Blood Type: ' . htmlspecialchars($user_appointments['blood_typing']) . '</p>';
    $userDetails .= '<p>YEAR: ' . htmlspecialchars($user_appointments['college_level']) . '</p>';

    // Query the 'appointments_images' table to get associated images
    $sql_images = "SELECT image_filename FROM appointment_images WHERE image_id = ?";
    $stmt_images = $conn->prepare($sql_images);
    $stmt_images->bind_param("i", $user_id); // "i" indicates an integer parameter
    $stmt_images->execute();
    $result_images = $stmt_images->get_result();

    // Check if images are found in 'appointments_images' table
    if ($result_images->num_rows > 0) {
        $userImages .= '<h2>User Images</h2>';
        while ($row_images = $result_images->fetch_assoc()) {
            // Construct image URL and sanitize it
            $imageFilename = htmlspecialchars($row_images['image_filename']);
            $imagePath = '/Zppsu_Medical/Php_logics/FileDirectory/' . $user_id . '/' . $imageFilename;

            // Display the image with proper HTML escaping
            $userImages .= '<img src="' . $imagePath . '" alt="User Image"><br>';
        }
    } else {
        $userImages .= 'No images found for this user.';
    }
} else {
    header('Location: http://localhost/Zppsu_Medical/Error_handling/404.html');
}

// Close the database connection
$stmt_appointments->close();
$stmt_images->close();
$conn->close();
?>

<?php
$optionName = $user_appointments['option_name'];
$additionalTests = [];

if ($optionName === "Non-Food Relate") {
    $additionalTests = ["X-Ray", "Drug test", "CBC w/ platelet count", "Physical Exam", "Blood Type"];
} elseif ($optionName === "Food Relate") {
    $additionalTests = ["X-Ray", "Drug test", "CBC w/ platelet count", "Physical Exam", "Blood Type", "Hepa test"];
}

// Store the additional tests in a variable
$additionalTestsString = !empty($additionalTests) ? implode(", ", $additionalTests) : '';

// You can use $additionalTestsString later to echo it as needed
?>

<?php
$optionName = $user_appointments['option_name'];
$additionalTests = [];

if ($optionName === "Non-Food Relate") {
    $additionalTests = ["X-Ray", "Drug test", "CBC w/ platelet count", "Physical Exam", "Blood Type"];
} elseif ($optionName === "Food Relate") {
    $additionalTests = ["X-Ray", "Drug test", "CBC w/ platelet count", "Physical Exam", "Blood Type", "Hepa test"];
}

// Store the additional tests in a variable
$additionalTestsString = !empty($additionalTests) ? implode(", ", $additionalTests) : '';

// You can use $additionalTestsString later to echo it as needed
?>


<!-- You can add HTML here to display $userDetails and $userImages as needed -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Hospital Patient Profile</title>

    <meta name="author" content="Your Name" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <style>
    body {
        background: url('../Php_Logics/FileDirectory/health-still-life-with-copy-space.jpg');
        background-repeat: no-repeat;
        background-size:cover;/* Change background to white */
        padding: 0;
        margin: 0;
        font-family: 'Lato', sans-serif;
        color: #000; /* Change text color to black */
        cursor: url('syringe.png'), auto;
    }

    .patient-profile .card {
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Add shadow to the cards */
    }

    .patient-profile .card .card-header .profile_img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 10px auto;
        border: 10px solid #ccc;
        border-radius: 50%;
    }

    .patient-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
    }

    .patient-profile .card p {
        font-size: 16px;
        color: #000;
    }

    .patient-profile .table th,
    .patient-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #000;
    }

    /* Add responsive styles for the message */
    @media (max-width: 768px) {
        .patient-profile .table td p {
            max-width: 100%; /* Ensure the text doesn't overflow */
            overflow-wrap: break-word; /* Enable text wrapping */
        }
        .patient-profile .table td {
            max-width: 100%; /* Set max-width for the table cell */
        }
    }

    /* Center the patient profile information */
    .center-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    /* Style the "Back" button as a white box with indigo-colored letters */
    .custom-button {
        background-color: #4ca2cd; /* Change button background color to indigo */
        color: #fff; /* Change button text color to white */
        padding: 10px 20px; /* Adjust padding as needed */
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease; /* Add a smooth transition effect */
        margin-top: 20px; /* Add some margin for spacing */
    }

    /* Style the button on hover */
    .custom-button:hover {
        background-color: #3579a6; /* Lighter indigo color on hover */
    }

    /* Style for the right container */
    .right-container {
        background: #ffffff; /* White background */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Add shadow to the right container */
        margin-top: 20px; /* Add margin to separate from the button */
        width: 100%; /* Ensure full width on small screens */
    }

    /* Style for images in the photo section */
    .photo-section img {
        max-width: 100%; /* Ensure images don't overflow their containers */
        margin: 10px 0;
    }

    /* Style for the medical photos container */
    .medical-photos-container {
        display: none; /* Hide the container initially */
    }

    .medical-photos-container img {
        max-width: 100%;
        margin: 10px 0;
    }

    /* Style for the thumbnail grid */
   /* Style for the thumbnail grid */
/* Style for the thumbnail grid */
/* Style for the thumbnail grid container */
.thumbnail-grid-container {
    background-color: #fff; /* White background for the container */
    padding: 20px; /* Padding around the container */
    border-radius: 10px; /* Rounded corners for the container */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Add shadow to the container */
}

/* Style for the thumbnail grid */
.thumbnail-grid {
    display: grid; /* Use grid layout */
    grid-template-columns: repeat(3, 1fr); /* Three columns per row */
    gap: 20px; /* Add spacing between grid items */
}

/* Style for thumbnail containers */
.thumbnail-container {
    cursor: pointer;
    position: relative; /* Add relative positioning to contain the image */
    width: 100%; /* Ensure all containers have the same width */
    padding: 10px; /* Add padding around each image */
    border: 1px solid #ccc; /* Add a border around each container */
    border-radius: 5px; /* Rounded corners for each container */
    background-color: #fff; /* White background for each container */
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); /* Add shadow to each container */
}

/* Style for thumbnail images */
.thumbnail-container img {
    max-width: 100%;
    display: block; /* Ensure images don't have extra space below them */
}

/* Style for a space between rows */
.thumbnail-space {
    width: 100%; /* Add a space that occupies the full width of the container */
    height: 20px; /* Adjust the height as needed for spacing */
    background-color: transparent; /* Set the background color to transparent */
    position: absolute; /* Position the space element */
    bottom: -20px; /* Position it just above the next row */
}

</style>

</head>
<body>
    <div class="center-content">
        <!-- Style the "Back" button as a white box with indigo-colored letters -->
        <a href="http://localhost/Zppsu_Medical/Student_Status/Nurse_Student_Status.php" class="custom-button" title="Back to Home">Back to Home</a>
    </div>
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <!-- Patient Profile -->
                    <div class="patient-profile py-4 center-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                            <img class="profile_img" src="https://png.pngtree.com/element_our/20190523/ourlarge/pngtree-cartoon-female-doctor-character-free-material-image_1084515.jpg" alt="patient dp">
                                            <h3>Patient's Name: <?php echo $user_appointments['name'] ?></h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong class="pr-1">Patient ID:</strong><?php echo $user_id ?></p>
                                            <p class="mb-0"><strong class="pr-1">Deparment:</strong><?php echo $user_appointments['department'] ?></p>
                                            <p class="mb-0"><strong class="pr-1">Year:</strong><?php echo $user_appointments['college_level'] ?></p>
                                            <p class="mb-0"><strong class="pr-1">Course:</strong><?php echo $user_appointments['course'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-sm right-container"> <!-- Moved to the right -->
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="30%">Email</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $user_appointments['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Admission Date</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $user_appointments['submitted_at'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Status</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $user_appointments['status'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Medical Type</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $user_appointments['option_name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width = "30%">Requirements</th>
                                                    <td width = "2%">:</td>
                                                    <td><?php echo $additionalTestsString ?> </td>
                                                </tr>
                                                <tr>
                                                    <th width = "30%">Blood Typing</th>
                                                    <td width = "2%">:</td>
                                                    <td><?php echo $user_appointments['blood_typing']?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Message</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <p><?php echo $user_appointments['message'] ?></p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="photo-section">
    <h3>Student Information</h3>
    <div class="thumbnail-grid-container">
        <div class="thumbnail-grid">
            <?php
            // Include your database connection code here
            require('C:\xampp\htdocs\Zppsu_Medical\Php_Logics\connection.php');

            // Retrieve user ID from the URL
            $user_id = $_GET['id'];

            // Query the 'appointments_images' table to get associated images
            $sql_images = "SELECT image_filename FROM appointment_images WHERE image_id = $user_id";
            $result_images = $conn->query($sql_images);

            // Check if images are found in 'appointments_images' table
            if ($result_images->num_rows > 0) {
                while ($row_images = $result_images->fetch_assoc()) {
                    // Construct image URL
                    $imageFilename = $row_images['image_filename'];
                    $imagePath = '/Zppsu_Medical/Php_logics/FileDirectory/' . $user_id . '/' . $imageFilename;

                    // Display the image within a thumbnail container
                    echo '<div class="thumbnail-container">';
                    echo '<img src="' . $imagePath . '" alt="User Image">';
                    echo '<div class="thumbnail-space"></div>'; // Add space between rows
                    echo '</div>';
                }
            } else {
                echo 'No images found for this user.';
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</div>

<!-- Your CSS -->
<style>
    /* ... (previous CSS) */

    /* Style for the modal container */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1;
        overflow: auto;
    }

    /* Style for the modal content */
    .modal-content {
        background-color: #fff;
        margin: 50px auto;
        max-width: 80%;
        text-align: center;
        position: relative;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    /* Style for the close button */
    .modal-close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    /* Center the image vertically */
    .modal-img {
        max-width: 100%;
        max-height: 80vh; /* Limit image height to 80% of viewport height */
        display: block;
        margin: 0 auto;
    }

    /* ... (other CSS styles) */
</style>











<!-- Modal for viewing images -->
<div class="modal" id="imageModal">
    <div class="modal-content">
        <!-- No close button here -->
        <img src="" alt="Full-size Image" class="modal-img">
    </div>
</div>



                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <!-- Patient Profile -->
                </div>
            </div>
        </div>

        
        <script>
    // Get all thumbnail containers
    const thumbnailContainers = document.querySelectorAll('.thumbnail-container');

    // Get the modal and modal image elements
    const modal = document.getElementById('imageModal');
    const modalImg = document.querySelector('.modal-img');

    // Set the desired dimensions
    const desiredWidth = 500;
    const desiredHeight = 600;

    // Initialize current image index
    let currentImageIndex = 0;

    // Variables for swipe functionality
    let touchStartX = null;
    let touchEndX = null;

    // Function to check if an image has minimum dimensions
    function hasMinimumDimensions(img, minWidth, minHeight) {
        return img.width >= minWidth && img.height >= minHeight;
    }

    // Function to load and display an image
    function loadAndDisplayImage(imgSrc) {
        const img = new Image();
        img.src = imgSrc;

        img.onload = () => {
            // Calculate the aspect ratio
            const aspectRatio = img.width / img.height;

            // Calculate new dimensions while preserving aspect ratio
            let newWidth, newHeight;
            if (aspectRatio > desiredWidth / desiredHeight) {
                newWidth = desiredWidth;
                newHeight = newWidth / aspectRatio;
            } else {
                newHeight = desiredHeight;
                newWidth = newHeight * aspectRatio;
            }

            // Set the dimensions of the modal image
            modalImg.style.width = newWidth + 'px';
            modalImg.style.height = newHeight + 'px';

            // Display the modal
            modal.style.display = 'block';
            modalImg.src = imgSrc;
        };
    }

    // Add click event listeners to thumbnail containers
    thumbnailContainers.forEach((container, index) => {
        container.addEventListener('click', () => {
            currentImageIndex = index;
            const imgSrc = container.querySelector('img').getAttribute('src');
            
            // Create a new Image object to check dimensions
            const img = new Image();
            img.src = imgSrc;

            img.onload = () => {
                if (hasMinimumDimensions(img, desiredWidth, desiredHeight)) {
                    loadAndDisplayImage(imgSrc);
                } else {
                    alert('Image does not meet minimum dimensions (500x600). Right click it Open in New Tab');
                }
            };
        });
    });

    // Close the modal when clicking outside
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Add swipe functionality to navigate images
    modalImg.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
    });

    modalImg.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].clientX;

        if (touchStartX - touchEndX > 50 && currentImageIndex < thumbnailContainers.length - 1) {
            // Swipe left to view the next image
            currentImageIndex++;
            const imgSrc = thumbnailContainers[currentImageIndex].querySelector('img').getAttribute('src');
            loadAndDisplayImage(imgSrc);
        } else if (touchEndX - touchStartX > 50 && currentImageIndex > 0) {
            // Swipe right to view the previous image
            currentImageIndex--;
            const imgSrc = thumbnailContainers[currentImageIndex].querySelector('img').getAttribute('src');
            loadAndDisplayImage(imgSrc);
        }
    });

    // ... (rest of your JavaScript code)
</script>
    </section>

</body>
</html>






