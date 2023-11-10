<?php 
 require ('../config.php');
include(NURSE_SESSION_PATH); 
include  (SEARCH_PHP_PATH2); 
require 'C:\xampp\htdocs\Zppsu_Medical\Php_Logics\connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/Zppsu_Medical/assets/css2/style2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin Dashboard Panel</title>

    <style>
    /* Global styles */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    /* Responsive breakpoints */
    @media (max-width: 768px) {
        .dashboard {
            align-items: center;
            padding: 20px 10px;
        }
        .custom-container {
            margin-top: 20px;
        }
    }

    .dashboard {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        min-height: 100vh;
        background-color: var(--panel-color);
        padding: 20px; /* Add some padding for spacing */
    }

    .custom-container {
        margin-top: 50px;
        width: 100%;
        height: 100%;
        background-color: var(--panel-color);
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 10px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .custom-container h2 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .custom-table {
        width: 100%;
    }

    .delete-button {
        background-color: red;
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 5px;
        z-index: 10002; /* Set a higher z-index value */

    }

    .view-button {
        background-color: green;
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 5px;
        z-index: 10002; /* Set a higher z-index value */
    }

    .update-button {
        background-color: blue;
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 5px;
        z-index: 10002; /* Set a higher z-index value */
    }

    .uppercase-text {
    text-transform: uppercase;
}

.upload-button {
    height: 37px;
  cursor: pointer;
  background-color: indigo; /* Indigo color */
  color: white;
  border: none;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 10px 0; /* Add spacing between buttons */
  cursor: pointer;
  border-radius: 5px;
}


.upload2-button {

  cursor: pointer;
  background-color: indigo; /* Indigo color */
  color: white;
  border: none;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 10px 0; /* Add spacing between buttons */
  cursor: pointer;
  border-radius: 5px;
}



/* Close button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
  z-index: 10001; /* Set a higher z-index value */
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
}

  /* Styling for department buttons */
  .department-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center; /* Center the buttons horizontally */
}

.department-button {
    padding: 10px 20px;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 200px;
}

/* Random background colors for department buttons */
.department-button:nth-child(1) {
    background-color: #007bff;
}

.department-button:nth-child(2) {
    background-color: #00a000;
}

.department-button:nth-child(3) {
    background-color: #ff5722;
}

.department-button:nth-child(4) {
    background-color: #e91e63;
    width: 100%;
}

.department-button:nth-child(5) {
    background-color: #9c27b0;
}

.department-button:nth-child(6) {
    background-color: #ff9800;
}

.department-button:nth-child(7) {
    background-color: #795548;
}

.department-button:nth-child(8) {
    background-color: #03a9f4;
}
.department-button:nth-child(9) {
    background-color: green;
}
.department-button:nth-child(10) {
    background-color: red;
}


/* Add more random colors for additional departments */
.department-button:hover {
    background-color: #0056b3;
}
      
.Search {
            background-color: blue;
            height: 50px;
            width: 90px;
            
        }
        /* Modal styles */
        /* Modal styles */
.modal {
    display: none; /* Initially hidden */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    z-index: 1; /* Ensure the modal is above other elements */
}

.modal-content {
    background-color: #fff;
    margin: 15% auto; /* Center the modal vertically and add more top margin */
    padding: 30px; /* Increase padding for more spacing inside the modal */
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 80%; /* Increase the default width to 80% */
    max-width: 500px; /* Increase the maximum width for the modal */
    z-index: 10000; /* Set a higher z-index value */
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    cursor: pointer;
}




/* Style for the modal */
.modal-upload {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999; /* Set a higher z-index value */
}

/* Style for the modal content */
.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 20px;
  width: 60%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  border-radius: 5px;
}

/* Style for the close button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

/* Style for file input label */
.upload-label {
    height: 50px;
  background-color: #4B0082; /* Indigo color */
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

/* Hide the default file input */
.file-upload {
  display: none;
}

    td {
    text-transform: uppercase;
}


 /* Style for the chat modal container */
/* Style for the chat modal container */
.chat-modal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f5f5f5;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    padding: 20px;
    width: 300px;
    font-family: Arial, sans-serif;
}

/* Style for the chat header */
.chat-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #2196F3;
    color: white;
    padding: 10px;
    border-radius: 8px 8px 0 0;
}

/* Style for the close button */
.chat-header button {
    background-color: transparent;
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
}

/* Style for the chat body */
.chat-body {
    max-height: 200px;
    overflow-y: auto;
    margin-top: 10px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 0 0 8px 8px;
    padding: 10px;
}

/* Style for the chat input */
.chat-input {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Style for the send button */
.chat-send-button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    border-radius: 4px;
    cursor: pointer;
}

/* Style for chat messages */
.chat-message {
    margin-bottom: 10px;
    padding: 8px;
    border-radius: 4px;
    background-color: #e5e5ea;
    color: #333;
}

/* Style for timestamp */
.timestamp {
    color: #888;
    font-size: 12px;
}

.chat-modal-button {
    background-color: #2196F3;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

/* Hover effect for the button */
.chat-modal-button:hover {
    background-color: #1976D2;
}

</style>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>
            <span class="logo_name">ZPPSU MEDICAL</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <!-- Menu items here -->
                <li><a href="http://localhost/Zppsu_Medical/Php_Logics/nurse-view.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="http://localhost/Zppsu_Medical/Student_Status/Nurse_Student_Status.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Student-Status</span>
                </a></li>
                <br>
                <script>
    function redirectToLink(link) {
      window.location.href = link;
    }
  </script>
                <div class="department-buttons">
  <!-- Normal department buttons with links -->
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Nurse_College_Records/College%20of%20Teacher%20Education.php')">College of Teacher Education</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Nurse_College_Records/Department%20of%20Technical%20Education.php')">Department of Technical Education</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Nurse_College_Records/College%20of%20Engineering%20and%20Technology.php')">College of Engineering and Technology</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Nurse_College_Records/Senior%20High%20School.php')">Senior High School</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Nurse_College_Records/School%20of%20Business%20Administration.php')">School of Business Administration</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Nurse_College_Records/College%20of%20Arts%20Humanities%20and%20Social%20Science.php')">College of Arts & Humanities</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Nurse_College_Records/College%20of%20Information%20and%20Computing%20Science.php')">College of Information and Computing Science</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Nurse_College_Records/College%20of%20Maritime%20Education.php')">College of Maritime Education</button>
  <button class="chat-modal-button" onclick="openChatModal()">Open Chat</button>

</div>
           
            </ul>
            
            <ul class="logout-mode">
                <!-- Logout here  -->
                <li><a href="  
                
                http://localhost/Zppsu_Medical/Php_logics/logout.php

                ">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                      <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <div class="search-box">
            <i class="uil uil-search"></i>
            <form method="post" action="" onsubmit="showModal(); return false;">
                <input type="submit" value="Search">
                <input type="text" name="search_term" id="search_term" placeholder="Search here..." required>
                
            </form>
        </div>
    </div>
    <div id="searchModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>BUTTONS ARE DISABLED IF NAME IS SEARCH </p>
            <h2>SEARCH RESULT</h2>  

            
        <button class="view-button" onclick="viewResult(this)">View</button>
        <button class="upload-button" onclick="openModal2()">Upload</button>
        <button class="update-button" onclick="updateResult()">Submit</button>
        <button class="delete-button" onclick="deleteResult(this)">Delete</button>


            <!-- #region -->
            
            <div id="searchResults">
                
            </div>
            
        </div>
    </div>


        <script>
        function sanitizeInput(input) {
        const div = document.createElement('div');
        div.appendChild(document.createTextNode(input));
        return div.innerHTML;
    } // Function to show the modal and update content
            // Function to show the modal and update content
    function showModal() {
        
        // Get the search term
        const searchTerm = document.getElementById('search_term').value;
        const deleteButton = document.querySelector('.delete-button');
        deleteButton.setAttribute('data-id', searchTerm);

        // Display the modal with loading indicator
        var modal = document.getElementById('searchModal');
        modal.style.display = 'block';
        var modalContent = modal.querySelector('#searchResults');
        modalContent.innerHTML = 'Loading...';

        // Fetch and update the search results with AJAX
        var xhr = new XMLHttpRequest();
        xhr.open(
            'GET',
            'http://localhost/Zppsu_Medical/Php_Logics/Search2.php?search_term=' + searchTerm,
            true
        );

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                modalContent.innerHTML = xhr.responseText;

                // Enable buttons here, e.g., by removing the "disabled" attribute
                enableButtonsInModal();

                // Attach event listeners to the buttons after content is loaded
                attachButtonListenersInModal();
            }
        };

        xhr.send();

        
    }


        // Function to enable buttons in the modal
        function enableButtonsInModal() {
            // Enable buttons by removing the "disabled" attribute
            var buttons = document.querySelectorAll('.modal-content button');
            buttons.forEach(function (button) {
                button.removeAttribute('disabled');
            });
        }

        // Attach event listeners to the buttons in the modal
        function attachButtonListenersInModal() {
            // Attach event listeners to the buttons inside the modal
            // Your button click event handling code here
        }

        // Function to close the modal
        function closeModal() {
  console.log("Close button clicked"); // Add this line for debugging
  var modal = document.getElementById('searchModal');
  modal.style.display = 'none';
}

        // Close modal if the user clicks outside of it
        window.onclick = function (event) {
            var modal = document.getElementById('searchModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        };
    </script>

<script>
    // JavaScript functions to handle button actions
    // Function to view a result (you need to implement this)
    function viewResult() {
    // Get the user input from the input field
    const searchTerm = document.getElementById('search_term').value;

    // Redirect to the profile page with the user ID as a query parameter
    window.location.href = 'http://localhost/Zppsu_Medical/Student_Status/view_user.php?id=' + searchTerm;
}

    function openModal2(){
        const searchTerm = document.getElementById('search_term').value;
        openModal(searchTerm);

    }

    // Function to update a result (you need to implement this)
    // Function to update a result
function updateResult(searchTerm) {
    // Send an AJAX request to update the status
    const xhr = new XMLHttpRequest();
    xhr.open(
        'POST',
        'http://localhost/Zppsu_Medical/Php_Logics/Send_Form.php',
        true
    );
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response (e.g., show a success message)
            alert(xhr.responseText);
            // Refresh the table after updating
            populateStudentTable(); // You should implement this function
        }
    };
    // Send the 'id' parameter (searchTerm) here
    xhr.send(`id=${searchTerm}&status=Review`);
}

    // Function to delete a result (you need to implement this)
   // Function to delete a result
   function updateResult() {
    // Get the search term
    const searchTerm = document.getElementById('search_term').value;

    // Check if there is a search term
    if (searchTerm.trim() === '') {
        alert('Please enter a search term before submitting.');
        return;
    }

    // Send an AJAX request to update the status
    const xhr = new XMLHttpRequest();
    xhr.open(
        'POST',
        'http://localhost/Zppsu_Medical/Php_Logics/Send_Form.php',
        true
    );
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response (e.g., show a success message)
            alert(xhr.responseText);
            // Refresh the table after updating
            populateStudentTable(); // You should implement this function
        }
    };
    // Send the 'id' parameter (searchTerm) here
    xhr.send(`id=${searchTerm}&status=Review`);
}

    
</script>

        <div class="custom-container">
    <h2>STUDENTS</h2>
    <table class="custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>COURSE</th>
                <th>STATUS</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php


// Query to fetch student data from the database, ordered by submission timestamp in ascending order
$sql = "SELECT * FROM `appointments` ORDER BY `submitted_at` DESC;";
// Modify the column name as needed
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through the results and generate table rows
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td style="text-transform: uppercase;">' . $row['name'] . '</td>';
        echo '<td style="text-transform: uppercase;">' . $row['course'] . '</td>';
        echo '<td style="text-transform: uppercase;">' . $row['status'] . '</td>';
        echo '<td>';
        
        // Create a form with a hidden input field for the user's ID
        echo '<form action="view_user.php" method="GET">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<button class="view-button" type="submit">View</button>';
        echo '</form>';
        
        echo '<button class="delete-button" data-id="' . $row['id'] . '">Delete</button>';
        echo '<button class="upload2-button" onclick="openModal(' . $row['id'] . ')">Upload</button>';
        
        // Add data-id and data-name attributes
        echo '<button class="update-button" id="sendButton" data-id="' . $row['id'] . '">Submit</button>';
        
        echo '</td>';
        echo '</tr>';
    }
} else {
    // If no records are found, display a message
    echo '<tr><td colspan="5">No students found</td></tr>';
}
?>

</style>
<div id="modal-upload" class="modal-upload">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Upload Images</h2>
    <form id="uploadForm" method="post" enctype="multipart/form-data" action="http://localhost/Zppsu_Medical/Php_logics/Submit-Pictures.php">
  <label for="fileToUpload" class="upload-label">Choose File</label>
  <input type="file" name="fileToUpload[]" id="fileToUpload" multiple accept="image/*" class="file-upload">
  <input type="submit" value="Upload Images" name="submit" class="upload-button">
</form>

  </div>
</div>
<div id="success-modal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeSuccessModal()">&times;</span>
    <p>Image uploaded successfully!</p>
  </div>
</div>


<div id="chatModal" class="chat-modal">
        <div class="chat-header">
            <h3>Chat</h3>
            <button onclick="closeChatModal()">Close</button>
        </div>
        <div class="chat-body" id="chatBody">
            <!-- Chat messages will be displayed here -->
        </div>
        <input type="text" id="messageInput" class="chat-input" placeholder="Type a message...">
        <button onclick="sendMessage()" class="chat-send-button">Send</button>
    </div>

    <script>


    function openChatModal() {
        var chatModal = document.getElementById("chatModal");
        chatModal.style.display = "block";
    }

    function closeChatModal() {
        var chatModal = document.getElementById("chatModal");
        chatModal.style.display = "none";
    }


    function sendMessage() {
        // Get the message from the input field
        var message = document.getElementById("messageInput").value;

        // Check if the message is not empty
        if (message.trim() !== "") {
            // Send the message to the server using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/Zppsu_Medical/Php_logics/nurse-Message.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Message sent successfully, you can update the chat window or perform other actions here
                    document.getElementById("messageInput").value = ""; // Clear the input field
                }
            };
            xhr.send("message=" + message);
        }
    }

    function closeChatModal() {
        // Close the chat modal or hide it
        var chatModal = document.getElementById("chatModal");
        chatModal.style.display = "none";
    }
</script>
<script>
    var isDragging = false;
    var offsetX, offsetY;

    // Function to start dragging the chat modal
    function startDrag(event) {
        isDragging = true;
        var chatModal = document.getElementById("chatModal");
        var header = document.querySelector(".chat-header");

        // Calculate the offset between the mouse click position and the modal's top-left corner
        offsetX = event.clientX - chatModal.getBoundingClientRect().left;
        offsetY = event.clientY - chatModal.getBoundingClientRect().top;

        // Set the modal's position to 'fixed' while dragging to prevent page scrolling issues
        chatModal.style.position = 'fixed';

        // Prevent text selection and other default browser behavior during dragging
        event.preventDefault();
    }

    // Function to stop dragging the chat modal
    function stopDrag() {
        isDragging = false;
    }

    // Function to move the chat modal while dragging
    function dragModal(event) {
        if (isDragging) {
            var chatModal = document.getElementById("chatModal");

            // Calculate the new position of the modal based on the mouse position
            var left = event.clientX - offsetX;
            var top = event.clientY - offsetY;

            // Apply the new position to the modal
            chatModal.style.left = left + 'px';
            chatModal.style.top = top + 'px';
        }
    }

    // Add event listeners for mouse events on the chat modal header
    var header = document.querySelector(".chat-header");
    header.addEventListener("mousedown", startDrag);
    window.addEventListener("mouseup", stopDrag);
    window.addEventListener("mousemove", dragModal);
</script>

<script>
// Function to update the chat box with messages
function updateChatBox() {
    var chatBody = document.getElementById("chatBody");

    // Use AJAX to fetch messages from the server
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "http://localhost/Zppsu_Medical/Php_logics/get-messages.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Messages received successfully
            chatBody.innerHTML = xhr.responseText; // Update the chat box with messages
        }
    };
    xhr.send();
}

// Update the chat box every 5 seconds (adjust as needed)
setInterval(updateChatBox, 5000);

</script>




<script>

// Function to open the modal
function openModal(studentID) {
  var modal = document.getElementById("modal-upload");
  modal.style.display = "block";

  // Store the student's ID as a data attribute on the modal
  modal.setAttribute("data-student-id", studentID);
}

// Function to close the modal
function closeModal() {
  var modal = document.getElementById("modal-upload");
  modal.style.display = "none";
}

// Add a click event listener to the window to close the modal when clicking outside
window.addEventListener("click", function(event) {
  var modal = document.getElementById("modal-upload");
  if (event.target == modal) {
    closeModal();
  }
});

// Additional client-side validation for file input
document.getElementById("uploadForm").addEventListener("submit", function(event) {
  var fileInput = document.getElementById("fileToUpload");
  var files = fileInput.files;
  var validExtensions = [".jpg", ".jpeg", ".gif", ".png"];
  var isValid = true;

  for (var i = 0; i < files.length; i++) {
    var fileName = files[i].name.toLowerCase();
    var fileExtension = fileName.substring(fileName.lastIndexOf("."));

    if (validExtensions.indexOf(fileExtension) === -1) {
      isValid = false;
      break;
    }
  }

  if (!isValid) {
    alert("Please select only JPG, JPEG, GIF, or PNG images.");
    event.preventDefault(); // Prevent form submission
  } else {
    // Get the student's ID and name from the modal's data attributes
    var studentId = document.getElementById("modal-upload").getAttribute("data-student-id");
    var studentName = document.getElementById("modal-upload").getAttribute("data-student-name");

    // Add the student's ID and name as hidden inputs to the form
    var hiddenIdInput = document.createElement("input");
    hiddenIdInput.type = "hidden";
    hiddenIdInput.name = "studentId";
    hiddenIdInput.value = studentId;
    document.getElementById("uploadForm").appendChild(hiddenIdInput);

    var hiddenNameInput = document.createElement("input");
    hiddenNameInput.type = "hidden";
    hiddenNameInput.name = "studentName";
    hiddenNameInput.value = studentName;
    document.getElementById("uploadForm").appendChild(hiddenNameInput);
  }
});
</script>


    </section>
    <script src="http://localhost/Zppsu_Medical/assets/js/script.js"></script>
    <script src="http://localhost/Zppsu_Medical/assets/js/Nurse_Stud.js"></script>

</body>
</html>
