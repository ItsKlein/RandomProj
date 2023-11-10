<?php 
 require ('../config.php');
include(DOCTOR_SESSION_PATH); 
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
        text-transform: uppercase;
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
   </style>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>
            <span class="logo_name">ZPPPSURASKIT</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <!-- Menu items here -->
                <li><a href="http://localhost/Zppsu_Medical/Php_Logics/doctor-view.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="http://localhost/Zppsu_Medical/Student_Status/Doctor_Student_Status.php">
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
  <br>
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
    <style>
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
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    cursor: pointer;
}

        
    </style>
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

</script>

            
                
            </div>
        </div>
        <div class="custom-container">
    <h2>College of Engineering and Technology</h2>
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
        include ('C:\xampp\htdocs\Zppsu_Medical\Php_Logics\connection.php');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Define the course you want to filter by
                    // Define an array of course names you want to filter by
                    
                    $courseNames = ["BS Marine Engineering"];
               
                $courseList = implode("', '", $courseNames);

// SQL query using IN clause
                $sql = "SELECT * FROM appointments WHERE course IN ('$courseList') ORDER BY department ASC";

                    // Execute the query
                    $result = $conn->query($sql);

                    // Check if there are results
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            // Access the appointment data here
                            $id = $row["id"];
                            $name = $row["name"];
                            $department = $row["department"];
                            $status = $row["status"];
                            
                            // Output the data in a table row
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$name</td>";
                            echo "<td>$department</td>";
                            echo "<td>$status</td>";
                            echo '<td>';
                            echo '<button class="delete-button" data-id="' . $row['id'] . '">Delete</button>';
                            echo '<button class="view-button">View</button>';
                            echo '<button class="update-pass">PASS</button>';
                            echo '<button class="update-fail">FAIL</button>';
                            echo '</td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No appointments found for the specified course.</td></tr>";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
            
        </tbody>
    </table>
</div>
<script>
    
  // Function to handle delete action
  function deleteAppointment(button) {
    const id = button.getAttribute('data-id');
    const confirmation = confirm(`Delete appointment with ID ${id}?`);
    if (confirmation) {
      // Send an AJAX request to delete the appointment with the specified ID
      // You can use fetch or another method to send the request to your PHP endpoint
      // Example using fetch:
      fetch(`http://localhost/Zppsu_Medical/Php_Logics/delete_appointment.php?id=${id}`, {
        method: 'DELETE', // Use the appropriate HTTP method
      })
        .then((response) => response.json())
        .then((data) => {
          // Handle the response as needed, e.g., show a success message and reload the page
          alert(data.message);
          location.reload();
        })
        .catch((error) => {
          console.error('Error deleting appointment:', error);
        });
    } else {
      alert('Delete canceled');
    }
  }




  // Function to handle pass action
  function updateStatusPass(id) {
    const xhr = new XMLHttpRequest();
  xhr.open(
    'POST',
    'http://localhost/Zppsu_Medical/Php_Logics/Update_Pass.php',
    true
  );
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert(xhr.responseText);
      location.reload();
    }
  };
  xhr.send(`id=${id}`);
  }

  // Function to handle fail action
  function updateStatusFail(id) {
    const xhr = new XMLHttpRequest();
  xhr.open(
    'POST',
    'http://localhost/Zppsu_Medical/Php_Logics/Update_Fail.php',
    true
  );
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert(xhr.responseText);
      location.reload();
    }
  };
  xhr.send(`id=${id}`);
  }

  // Attach event listeners to the buttons
  document.querySelectorAll('.delete-button').forEach((button) => {
    button.addEventListener('click', () => {
      deleteAppointment(button);
    });
  });

  document.querySelectorAll('.view-button').forEach((button) => {
    button.addEventListener('click', () => {
      viewAppointment(button);
    });
  });

  document.querySelectorAll('.update-pass').forEach((button) => {
    button.addEventListener('click', () => {
      const id = button.closest('tr').querySelector('.delete-button').getAttribute('data-id');
      updateStatusPass(id);
    });
  });

  document.querySelectorAll('.update-fail').forEach((button) => {
    button.addEventListener('click', () => {
      const id = button.closest('tr').querySelector('.delete-button').getAttribute('data-id');
      updateStatusFail(id);
    });
  });


</script>
    </section>
    <script src="http://localhost/Zppsu_Medical/assets/js/script.js"></script>
    <script src="http://localhost/Zppsu_Medical/assets/js/Doctor_Stud.js"></script>
    
</body>
</html>
