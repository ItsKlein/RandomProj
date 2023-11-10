
<!--PHP TO INCLUDE OTHER LOGIC FOR EASY ROUTING FIX 
IF DEPLOYED IN A SERVER -->

<?php
require_once ('../config.php');
include ('C:\xampp\htdocs\Zppsu_Medical\Php_Logics\connection.php');
include (SUBMISSION_COUNT_PATH);
include (TOTAL_PENDING_PATH2);
include (UPDATE_PASS_PATH);
include (SEND_FORM_PATH);
include (UPDATEFAIL_SESSION_PATH);
include (DOCTOR_SESSION_PATH);
include (SEARCH_PHP_PATH);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/Zppsu_Medical/assets/css2/style2.css">
     
    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin Dashboard Panel</title>
    <!-- INLINE CSS -->
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
    }

    .view-button {
        background-color: green;
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 5px;
        z-index: 1040;
    }

    .update-pass {
        background-color: blue;
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .update-fail {
        background-color: rgb(139, 0, 0);
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .uppercase-text {
    text-transform: uppercase;
}


.appointment-filter {
            margin-top: 50px;
            text-align: center;
        }

        .appointment-filter label {
            font-weight: bold;
        }

        .appointment-filter select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .appointment-filter button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .appointment-filter button:last-child {
            margin-right: 0;
            margin-top: 15px;
        }

        .filtered-appointments {
            margin-top: 20px;
        }

        #courseDropdown {
    width: 50%;
    
    background-color: #fff !important;
    border: 1px solid #ced4da !important;
    border-radius: 0.25rem !important;
    padding: 0.375rem 0.75rem !important;
    font-size: 1rem !important;
}

.input-group input[type="text"] {
    background-color: #fff !important;
    border: 1px solid #ced4da !important;
    border-radius: 0.25rem !important;
    padding: 0.375rem 0.75rem !important;
    font-size: 1rem !important;
}

.input-group-prepend .input-group-text {
    background-color: #007bff !important;
    border: none !important;
    color: #fff !important;
    cursor: pointer !important;
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
        .modal {
    display: none; /* Initially hidden */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    z-index: 1; /* Ensure the modal is above other elements */
    text-transform: uppercase;

}

.modal-content {
    background-color: #fff;
    margin: 15% auto; /* Center the modal vertically and add more top margin */
    padding: 30px; /* Increase padding for more spacing inside the modal */
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 90%; /* Increase the default width */
    max-width: 500px; /* Increase the maximum width for the modal */
    z-index: 2; /* Ensure modal content appears above the semi-transparent background */
    text-transform: uppercase;

}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    cursor: pointer;
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

/* Style for the "Open Chat" button */
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
                <li><a href="../Php_Logics/doctor-view.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <!--- REDEFINE IF SERVER-->
                <li><a href="../Student_Status/Doctor_Student_Status.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Student-Status</span>
                </a></li>
                <br>
                <div class="department-buttons">
  <!-- Normal department buttons with links 
 Change this if Server Deployment route the url of the links
-->
  
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Doctor_College_Records/College%20of%20Teacher%20Education.php')">College of Teacher Education</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Doctor_College_Records/College%20of%20Teacher%20Education.php')">Department of Technical Education</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Doctor_College_Records/College%20of%20Engineering%20and%20Technology.php')">College of Engineering and Technology</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Doctor_College_Records/Senior%20High%20School.php')">Senior High School</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Doctor_College_Records/School%20of%20Business%20Administration.php')">School of Business Administration</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Doctor_College_Records/College%20of%20Arts%20Humanities%20and%20Social%20Science.php')">College of Arts & Humanities</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Doctor_College_Records/College%20of%20Information%20and%20Computing%20Science.php')">College of Information and Computing Science</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Doctor_College_Records/College%20of%20Maritime%20Education.php')">College of Maritime Education</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Student_Status/Normal.php')">NORMAL</button>
  <button class="department-button" onclick="redirectToLink('http://localhost/Zppsu_Medical/Student_Status/Fail.php')">ABNORMAL</button>
  <button class="chat-modal-button" onclick="openChatModal()">Open Chat</button>

  <!-- Add more department buttons for each department -->
</div>

<script>
  // JavaScript function to redirect to a link
  function redirectToLink(link) {
    window.location.href = link;
  }
</script>
  
       
            
        </ul>
          <ul class="logout-mode">
                <!-- Logout here  -->
                <li><a href="http://localhost/Zppsu_Medical/Php_logics/logout.php">
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
    


        

    <script>let responseData = [];</script>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <!-- Search Form -->

           <div class="search-box">
  <i class="uil uil-search"></i>
  <form method="post" action="" onsubmit="showModal(); return false;">
    <input type="submit" value="Search">
    <input type="text" name="search_term" id="search_term" placeholder="Search here..." required>
  </form>
</div>

<!-- ... (HTML code for the form and modal) ... -->

<div id="searchModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <p>BUTTONS ARE DISABLED IF NAME IS SEARCH </p>
            <h2>SEARCH RESULT</h2>  
    <div id="searchResults">
    </div>
  </div>
</div>

<script>
  // Function to show the modal and update content
  function showModal() {
    // Get the search term
    var searchTerm = document.getElementById('search_term').value;

    // Display the modal with loading indicator
    var modal = document.getElementById('searchModal');
    modal.style.display = 'block';
    var modalContent = modal.querySelector('#searchResults');
    modalContent.innerHTML = 'Loading...';

    // Fetch and update the search results with AJAX
    var xhr = new XMLHttpRequest();
    xhr.open(
      'GET',
      'http://localhost/Zppsu_Medical/Php_Logics/Search.php?search_term=' + searchTerm,
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
  var viewButtons = document.querySelectorAll('.modal-content .view-button');
  viewButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var searchTerm = document.getElementById('search_term').value;
      redirectToView(searchTerm);
    });
  });
}

  // Function to close the modal
  function closeModal() {
    var modal = document.getElementById('searchModal');
    modal.style.display = 'none';
  }

  // Sample function to redirect to a view page
  function redirectToView(searchTerm) {
  // Replace with your logic to redirect to the view page using the search term
  console.log('Redirecting to view page with search term:', searchTerm);
}


// Redirect the user to the specified URL
window.location.href = viewUrl;{
  }

  function deleteStudent(searchTerm) {

  }

  function updateStatusFail(searchTerm) {

  }

  function updateStatusPass(searchTerm) {

  }

</script>





        </div>
        <div class="custom-container">
    <h2>Student Submited: <?php echo $appointment_count ?></h2>
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
        <tbody id="appointment-list">
            


        </tbody>
    </table>
</div>
</section>


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
            xhr.open("POST", "http://localhost/Zppsu_Medical/Php_logics/doctor-Message.php", true);
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


<script src="http://localhost/Zppsu_Medical/assets/js/script.js"></script>
<script src="http://localhost/Zppsu_Medical/assets/js/Doctor_Stud.js"></script>
<script src="http://localhost/Zppsu_Medical/assets/js/custom-message.js"></script>
</body>
</html>