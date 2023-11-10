<?php

// Include the configuration file to access the constants
include ('../config.php');

include(SUBMISSION_COUNT_PATH);
include(UPDATE_PASS_PATH);
include(SEND_FORM_PATH);
include(TOTAL_PENDING_PATH2);
include (DOCTOR_SESSION_PATH);
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="http://localhost/Zppsu_Medical/assets/css2/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin Dashboard Panel</title>
    <style>
            p {
                color: yellow;
                font-size: 25px;
            }
            .welcome-message {
                        margin: 12px;
                    }

         </style>

</head>
<body>
      <!-- Welcome User Message -->
     

    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">ZPPSU MEDICAL</span>
        </div>

       
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="http://localhost/Zppsu_Medical/Php_Logics/doctor-view.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="http://localhost/Zppsu_Medical/Student_Status/Doctor_Student_Status.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Over-all-Student</span>
                </a></li>  
            </ul>
            
            
            <ul class="logout-mode">
                <li><a href="../Php_Logics/logout.php">
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
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                  <!-- Welcome User Message -->
                  <!--- edit the p tag choose colors ---->
    <div class="welcome-message">
    <p>WELCOME: <?php echo $userRole; ?></p>

    </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Submited</span>
                        <span class="number"><?php echo $appointment_count ?></span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total Pending</span>
                        <span class="number"><?php echo $doctor_count?></span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Approved</span>
                        <span class="number"><?php echo $passCount ?></span>
                    </div>
                </div>
               
            </div>

            
    </section>

    <script src="http://localhost/Zppsu_Medical/assets/js/script.js"></script>
</body>
</html>