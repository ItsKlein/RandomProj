

<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
/* OVER WRITE CSS */
  #topbar {
    background-color: maroon !important;
  }
#header {
  background-color: maroon !important;
  
}

#header .logo a {
  color: white !important;
}


  #why-us .icon-box {
    background-color: maroon !important;
  }

 .content {
  background-color: maroon !important;
 }

 .why-us {
    color: white !important;
  }

  .why-us .content {
 background-color: maroon !important;
 border-radius: 12px !important;
 height: 670px !important;
}


  
.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #feffff !important ;
  border-color: cornflowerblue !important;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: white !important;
  border: none;
}

.nav-linkscrollto {
  color:white !important;
  padding: 12px !important; 
}

.why-us .icon-boxes .icon-box p { 
  color: white !important;
}

.counts .count-box i {
  background: maroon !important;
  
}
.about .icon-box .icon i {
  color: maroon !important;
}

.about .icon-box .icon {
  border: 2px solid maroon !important;
}

.services .icon-box .icon {
  background: maroon !important;
}

.section-bg {
  background-color: maroon !important;
  color: white important!;
}
.section-title h2 {
  color: black !important;
}

.section-title p {
  color: black !important;
}
.contact .info i {
    color: #880000 !important;
    
    background: white !important;
    
  }
  .doctors .member {
box-shadow: 5px 10px 2px rgba(44, 73, 100, 0.08) !important;
  }
.doctors {
  background: white !important;
}

.appointment-btn{
  background: #dc3545 !important;
}

#hero .btn-get-started {
  background: #dc3545 !important;
}

.counts {
  background: #880000 !important;
}

.counts .count-box {
  box-shadow: 50px 10px 2px rgba(44, 73, 100, 0.08) !important;
}


.contact .php-email-form button[type=submit]{
  background: #dc3545 !important;
}

.appointment .php-email-form button[type=submit]{
  background: #dc3545 !important;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #f00202 !important;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #dc3545 !important;
}



</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Recskitzppsu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/redskit.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Recskitzppsu</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Collegs/Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctor and Nurses</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto" id = "log-out"><span class="d-none d-md-inline">Fill up a</span> Form</a>
      <a class="nav-linkscrollto" href="http://localhost/Zppsu_Medical/Php_logics/login.php">Log in</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="color: black;">Welcome </h1>
      <h2 style="color: black;">Zamboanga Polythecnic State University Medical Dental Website</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container">

    <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Importance of Medical</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx:book-open"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021c.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196c.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z"/></svg>
                <h4>VISION</h4>
                <p>A world-class Polytechnic University.</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx:target-lock"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3" fill="currentColor"/><path fill="currentColor" d="M13 4.069V2h-2v2.069A8.008 8.008 0 0 0 4.069 11H2v2h2.069A8.007 8.007 0 0 0 11 19.931V22h2v-2.069A8.007 8.007 0 0 0 19.931 13H22v-2h-2.069A8.008 8.008 0 0 0 13 4.069zM12 18c-3.309 0-6-2.691-6-6s2.691-6 6-6s6 2.691 6 6s-2.691 6-6 6z"/></svg>
                <h4>MISSION</h4>
                <p>Produce globally competent human capital and research innovations for quality lives.</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx:badge"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19.965 8.521C19.988 8.347 20 8.173 20 8c0-2.378-2.143-4.288-4.521-3.964C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.036C6.138 3.712 4 5.622 4 8c0 .173.012.347.035.521C2.802 9.214 2 10.535 2 12s.802 2.786 2.035 3.479A3.976 3.976 0 0 0 4 16c0 2.378 2.138 4.284 4.521 3.964C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.036C17.857 20.284 20 18.378 20 16c0-.173-.012-.347-.035-.521C21.198 14.786 22 13.465 22 12s-.802-2.786-2.035-3.479zm-1.442 5.403l-1.102.293l.434 1.053c.095.23.145.483.145.73c0 1.103-.897 2-2 2c-.247 0-.499-.05-.73-.145l-1.054-.434l-.293 1.102a1.99 1.99 0 0 1-3.846 0l-.293-1.102l-1.054.434A1.935 1.935 0 0 1 8 18c-1.103 0-2-.897-2-2c0-.247.05-.5.145-.73l.434-1.053l-1.102-.293a1.993 1.993 0 0 1 0-3.848l1.102-.293l-.434-1.053A1.932 1.932 0 0 1 6 8c0-1.103.897-2 2-2c.247 0 .499.05.73.145l1.054.434l.293-1.102a1.99 1.99 0 0 1 3.846 0l.293 1.102l1.054-.434C15.501 6.05 15.753 6 16 6c1.103 0 2 .897 2 2c0 .247-.05.5-.145.73l-.434 1.053l1.102.293a1.993 1.993 0 0 1 0 3.848z"/></svg>
                <h4>Goals</h4>
                <p>Develop and sustain the cultures of:
                  -Innovation
                  -Collaboration
                  -Responsiveness and Excellence
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-4">
                <i class="bx:book-heart"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3 8v11c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v3zm3-4h13v12H5V5c0-.806.55-.988 1-1z"/><path fill="currentColor" d="m11.997 14l3.35-3.289a2.129 2.129 0 0 0 0-3.069a2.225 2.225 0 0 0-3.126 0l-.224.218l-.224-.219a2.224 2.224 0 0 0-3.125 0a2.129 2.129 0 0 0 0 3.069L11.997 14z"/></svg>
                <h4>CORE VALUES</h4>
                <p>-Love of God and Country
                  -Social Responsibility
                  -Commitment/Dedication to Service
                  -Accountability
                </p>
              </div>
            </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section>

<script>
        // JavaScript code to force show the content keep hiding 
        function forceShowContent() {
            // Get a reference to the .content element
            var contentElement = document.querySelector('.why-us .content');

            // Check if the content element exists
            if (contentElement) {
                // Remove any 'hidden' class and set 'display' to 'block'
                contentElement.classList.remove('hidden');
                contentElement.style.display = 'block';
            }
        }

        // Call the function to force show the content when the page loads
        window.addEventListener('load', forceShowContent);
    </script>



    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- OVER WRITE STYLE CSS -->
 <style>
    .hidden-checkbox {
      display: none;
    }

    .image-gallery {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      z-index: 9999;
      overflow: hidden;
    }

    .gallery-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 100%;
    }

    .gallery-content img {
      max-width: 100%;
      max-height: 80%;
      object-fit: contain;
      padding: 20px;
    }

    .close-button {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 30px;
      color: white;
      cursor: pointer;
    }

    .prev-button,
    .next-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 30px;
      color: white;
      background: none;
      border: none;
      cursor: pointer;
    }

    .prev-button {
      left: 20px;
    }

    .next-button {
      right: 20px;
    }

    /* Customize the styling for each gallery */
    .image-gallery-doctors img {
      /* Add your styling for Doctors/Dental Doctors gallery here */
    }

    .image-gallery-achievements img {
      /* Add your styling for Achievements gallery here */
    }

    .image-gallery-nurse img {
      /* Add your styling for Nurse gallery here */
    }

    .image-gallery-clinic img {
      /* Add your styling for Clinic Rooms gallery here */
    }

    /* Hide labels when gallery is open */
    .image-gallery-doctors.open-gallery label,
    .image-gallery-achievements.open-gallery label,
    .image-gallery-nurse.open-gallery label,
    .image-gallery-clinic.open-gallery label {
      display: none;
    }
  </style>
</head>
<body>
  <!-- Your HTML content -->
  <section id="counts" class="counts">
    <div class="container">
      <div class="row">

        <!-- Doctors/Dental Doctors count-box -->
        <div class="col-lg-3 col-md-6">
          <div class="count-box" onclick="openGallery('doctorsGallery')">
            <i class="fas fa-user-md"></i>
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
              class="purecounter"></span>
            <label for="image-trigger-doctors" class="image-trigger">Doctors/Dental Doctors</label>
          </div>
        </div>

        <!-- Nurse count-box -->
        <div class="col-lg-3 col-md-6">
          <div class="count-box" onclick="openGallery('nurseGallery')">
            <i class="far fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
              class="purecounter"></span>
            <label for="image-trigger-nurse" class="image-trigger">Nurse</label>
          </div>
        </div>

        <!-- Clinic Rooms count-box -->
        <div class="col-lg-3 col-md-6">
          <div class="count-box" onclick="openGallery('clinicGallery')">
            <i class="fas fa-flask"></i>
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1"
              class="purecounter"></span>
            <label for="image-trigger-clinic" class="image-trigger">Clinic Rooms</label>
          </div>
        </div>

        <!-- Achievements count-box -->
        <div class="col-lg-3 col-md-6">
          <div class="count-box" onclick="openGallery('achievementsGallery')">
            <i class="fas fa-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1"
              class="purecounter"></span>
            <label for="image-trigger-achievements" class="image-trigger">Achievements</label>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Doctors/Dental Doctors Image Gallery -->
  <input type="checkbox" id="image-trigger-doctors" class="hidden-checkbox">
  <div class="image-gallery image-gallery-doctors" id="doctorsGallery">
    <span class="close-button" onclick="closeGallery('doctorsGallery')">&times;</span>
    <div class="gallery-content">
      <img src="Admin_Panel\assets\img\about.jpg" alt="Doctor 1">
      <img src="doctor2.jpg" alt="Doctor 2">
      <img src="doctor2.jpg" alt="Doctor 3">
      <img src="doctor2.jpg" alt="Doctor 4">
      <!-- Add more images for Doctors/Dental Doctors as needed -->
    </div>
    <button class="prev-button" onclick="prevImage('doctorsGallery')">&#10094;</button>
    <button class="next-button" onclick="nextImage('doctorsGallery')">&#10095;</button>
  </div>

  <!-- Achievements Image Gallery -->
  <input type="checkbox" id="image-trigger-achievements" class="hidden-checkbox">
  <div class="image-gallery image-gallery-achievements" id="achievementsGallery">
    <span class="close-button" onclick="closeGallery('achievementsGallery')">&times;</span>
    <div class="gallery-content">
      <img src="achievement1.jpg" alt="Achievement 1">
      <img src="achievement2.jpg" alt="Achievement 2">
      <!-- Add more images for Achievements as needed -->
    </div>
    <button class="prev-button" onclick="prevImage('achievementsGallery')">&#10094;</button>
    <button class="next-button" onclick="nextImage('achievementsGallery')">&#10095;</button>
  </div>

  <!-- Nurse Image Gallery -->
  <input type="checkbox" id="image-trigger-nurse" class="hidden-checkbox">
  <div class="image-gallery image-gallery-nurse" id="nurseGallery">
    <span class="close-button" onclick="closeGallery('nurseGallery')">&times;</span>
    <div class="gallery-content">
      <img src="nurse1.jpg" alt="Nurse 1">
      <img src="nurse2.jpg" alt="Nurse 2">
      <!-- Add more images for Nurse as needed -->
    </div>
    <button class="prev-button" onclick="prevImage('nurseGallery')">&#10094;</button>
    <button class="next-button" onclick="nextImage('nurseGallery')">&#10095;</button>
  </div>

  <!-- Clinic Rooms Image Gallery -->
  <input type="checkbox" id="image-trigger-clinic" class="hidden-checkbox">
  <div class="image-gallery image-gallery-clinic" id="clinicGallery">
    <span class="close-button" onclick="closeGallery('clinicGallery')">&times;</span>
    <div class="gallery-content">
      <img src="clinic-room-1.jpg" alt="Clinic Room 1">
      <img src="clinic-room-2.jpg" alt="Clinic Room 2">
      <!-- Add more images for Clinic Rooms as needed -->
    </div>
    <button class="prev-button" onclick="prevImage('clinicGallery')">&#10094;</button>
    <button class="next-button" onclick="nextImage('clinicGallery')">&#10095;</button>
  </div>

  <script>
    let currentImageIndices = {
      'doctorsGallery': 0,
      'achievementsGallery': 0,
      'nurseGallery': 0,
      'clinicGallery': 0
    };

    function showImage(galleryId, index) {
      const images = document.querySelectorAll(`#${galleryId} .gallery-content img`);

      images.forEach((image) => {
        image.style.display = 'none';
      });

      images[index].style.display = 'block';
    }

    function prevImage(galleryId) {
      currentImageIndices[galleryId]--;
      if (currentImageIndices[galleryId] < 0) {
        currentImageIndices[galleryId] = 0;
      }
      showImage(galleryId, currentImageIndices[galleryId]);
    }

    function nextImage(galleryId) {
      const images = document.querySelectorAll(`#${galleryId} .gallery-content img`);
      currentImageIndices[galleryId]++;
      if (currentImageIndices[galleryId] >= images.length) {
        currentImageIndices[galleryId] = images.length - 1;
      }
      showImage(galleryId, currentImageIndices[galleryId]);
    }

    function openGallery(galleryId) {
      currentImageIndices[galleryId] = 0;
      showImage(galleryId, currentImageIndices[galleryId]);
      const gallery = document.getElementById(galleryId);
      gallery.style.display = 'block';
      gallery.classList.add('open-gallery');
    }

    function closeGallery(galleryId) {
      const gallery = document.getElementById(galleryId);
      gallery.style.display = 'none';
      gallery.classList.remove('open-gallery');
    }
  </script>
    
    
    
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-first-aid"></i></div>
              <h4><a>First Aid Kit med</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">Free Medicine</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">Free Medical Consoltation</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-book"></i></div>
              <h4><a href="">Health Education</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Facilitate</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-tooth"></i></div>
              <h4><a href="">Dental Services</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Colleges/Departments</h2>
          <p> Colleges and Departments in Zamboanga Peninsula Polytechnic State University.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">College of Maritime Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Colleg of Information and Computing Science</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Colleg of Arts Humanities and Social Science</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">School of Business Administration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Senior High School</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">College of Engineering and Technology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Department of Technical Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">College of Teacher Education</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>CME</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/mr.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>CICS</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/CICS.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>CAHSS</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/tr.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>SBA</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/bs.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>SHS</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/shs.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            <div class="tab-pane" id="tab-6">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>CET</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/et.jpg" alt="" class="img-fluid">
              </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-7">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>DTE</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/tt.jpg" alt="" class="img-fluid">
              </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-8">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>CTE</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/et.jpg" alt="" class="img-fluid">
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Departments Section -->
    <style>
       /* Override existing styles with !important */
  .appointment .php-email-form .form-control {
    width: 100% !important; /* Force 100% width for input fields */
    padding: 10px !important; /* Add padding */
    margin-bottom: 15px !important; /* Add some spacing between input fields */
    border: 1px solid #ccc !important; /* Add a border */
    border-radius: 5px !important; /* Add border radius */
  }

  .appointment .php-email-form .form-select {
    width: 100% !important; /* Force 100% width for select fields */
    padding: 10px !important; /* Add padding */
    margin-bottom: 15px !important; /* Add some spacing between select fields */
    border: 1px solid #ccc !important; /* Add a border */
    border-radius: 5px !important; /* Add border radius */
  }

  .appointment .php-email-form select option {
    padding: 5px !important; /* Add padding to select options */
  }

  /* Style for the label of the "Blood Typing" select */
  .appointment .php-email-form label[for="blood-typing"] {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  /* Style for the "Blood Typing" select */
  .appointment .php-email-form #blood-typing {
    width: 100% !important; /* Force 100% width */
    padding: 10px !important; /* Add padding */
    border: 1px solid #ccc !important; /* Add a border */
    border-radius: 5px !important; /* Add border radius */
    background-color: #f9f9f9 !important; /* Add background color */
  }

  /* Style for the message box */
  .appointment .php-email-form textarea {
    width: 100% !important; /* Force 100% width */
    padding: 10px !important; /* Add padding */
    border: 1px solid #ccc !important; /* Add a border */
    border-radius: 5px !important; /* Add border radius */
    background-color: #f9f9f9 !important; /* Add background color */
  }

  /* Style for the submit button */
  .appointment .php-email-form button {
    background-color: #007bff; /* Button background color */
    color: #fff; /* Button text color */
    border: none; /* Remove button border */
    border-radius: 5px; /* Add button border radius */
    padding: 10px 20px; /* Add padding to the button */
    cursor: pointer; /* Change cursor on hover */
  }

  /* Style for the submit button on hover */
  .appointment .php-email-form button:hover {
    background-color: #0056b3; /* Change background color on hover */
  }
    </style>
    <section id="index.php" class="appointment section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Form</h2>
          <p>Fill up this form properly</p>
        </div>
    
        <!---FIX THIS IF SERVER DEPLOYMENT-->
        <form action="http://192.168.124.157/Zppsu_Medical/Php_Logics/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="id" class="form-control" id="id" placeholder="Id No." required data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-select" required>
                <option value="">Select Colleges/Department</option>
                <option value="College of Maritime Education">College of Maritime Education</option>
                <option value="College of Information and Computing Science">College of Information and Computing Science</option>
                <option value="College of Arts Humanities and Social Science">College of Arts Humanities and Social Science</option>
                <option value="School of Business Administration">School of Business Administration</option>
                <option value="Senior High School">Senior High School</option>
                <option value="College of Engineering and Technology">College of Engineering and Technology</option>
                <option value="Department of Technical Education">Department of Technical Education</option>
                <option value="College of Teacher Education">College of Teacher Education</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="courses" id="courses" class="form-select" aria-required="true" required>
                <option value="">Select Courses</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md-4 form-group">
              <select name="option_name" id="option_name" class="form-select" aria-required="true" required>
                <option value="">Select According to Your Course</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              
              <select class="form-select" id="blood-typing" name="blood-typing" required>
                <option value="">Blood Typing</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div class="col-md-4 form-group">
            <select class="form-select" id="CollegeLevel" name="CollegeLevel" required>
                <option value="">COLLEGE YEAR</option>
                <option value="FirstYear">FIRST YEAR</option>
                <option value="SecondYear">SECOND YEAR</option>
                <option value="ThirdYear">THIRD YEAR</option>
                <option value="FourthYear">FOURTH YEAR</option>
            </select>
        </div>
            <div class="col-md-4 form-group">
              <name="medical_type" id="medical_type" class="form-select" aria-readonly="true" required>
                <option value="">MEDICAL TYPE</option>
              </>
              <div class="validate"></div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md-12 form-group">
              <textarea class="form-control" name="message" rows="8" placeholder="Message (Optional)"></textarea>
              <div class="validate"></div>
            </div>
          </div>
    
         
          
            <div class="col-md-4 text-center my-3">
              <button
  type="submit"
  name="submit"
>
  Submit
</button>
            </div>
          </div>
        </form>
      </div>
    </section>
 <style>
  #successModal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999;
}

/* Modal content */
.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 600px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  position: relative;
}

/* Close button */
.close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 10px;
  cursor: pointer;
}

.appointment .php-email-form button[type="submit"]{
  margin: 0 auto !important;
}
</style>


    
<script>
  const departmentSelect = document.getElementById("department");
  const coursesSelect = document.getElementById("courses");
  const optionSelect = document.getElementById("option_name");
  const medicalSelect = document.getElementById("medical_type");

  const departmentData = {
    "College of Maritime Education": {
      courses: ["BS Marine Engineering"],
      options: ["Non-Food Relate", "Food Relate"],
      medical: {
        "Non-Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Physical Exam", "Blood Type"],
        "Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Physical Exam", "Blood Type", "Hepa test"],
      },
    },
    "College of Information and Computing Science": {
      courses: ["BS Information Technology", "BS Information System"],
      options: ["Non-Food Relate", "Food Relate"],
      medical: {
        "Non-Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
        "Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
      },
    },
    "College of Arts Humanities and Social Science": {
      courses: ["BS Development Communication", "BS Fine Arts in Industrial Design", "BA Sining ng Filipino"],
      options: ["Non-Food Relate", "Food Relate"],
      medical: {
        "Non-Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
        "Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
      },
    },
    "School of Business Administration": {
      courses: ["BACHELOR OF SCIENCE IN ENTREPRENEURSHIP", "BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT"],
      options: ["Non-Food Relate", "Food Relate"],
      medical: {
        "Non-Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
        "Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
      },
    },
    "Senior High School": {
      courses: ["GAS", "STEM", "TVL-AUTO", "TVL-BREAD", "TVL-ANIMATION", "TVL-CSS", "TVL-COOK", "TVL-ELECT", "TVL-ELXT", "TVL-FOOD", "TVL-FRONT", "TVL-DRAFT", "TVL DRESSMAKING"],
      options: ["Non-Food Relate", "Food Relate"],
      medical: {
        "Non-Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
        "Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
      },
    },
    "College of Engineering and Technology": {
      courses: ["BSIT PPE- BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN POWER PLANT ENGINEERING", "BS AT-BACHELOR OF SCIENCE IN AUTOMOTIVE TECHNOLOGY", "BS COMPTECH-BACHELOR OF SCIENCE IN COMPUTER TECHNOLOGY", "BS ELECT-BACHELOR OF SCIENCE IN ELECTRICAL TECHNOLOGY", "BACHELOR OF SCIENCE IN ELECTRONICS TECHNOLOGY", "BS ELEXT-BACHELOR OF SCIENCE IN REFRIGERATION AND AIR CONDITIONING", "BS RACT-BS MECHTECH TECHNOLOGY", "BACHELOR OF SCIENCE IN MECHANICAL TECHNOLOGY", "BSIT CT-BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN CIVIL TECHNOLOGY", "BSIT DT-BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN DRAFTING TECHNOLOGY", "BSIT FT-BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN FOOD TECHNOLOGY", "BSIT GTT- BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN GARMENTS AND TEXTILE TECHNOLOGY"],
      options: ["Non-Food Relate", "Food Relate"],
      medical: {
        "Non-Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
        "Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
      },
    },
    "Department of Technical Education": {
      courses: ["2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN AUTOMOTIVE TECHNOLOGY", "2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN ELECTRICAL TECHNOLOGY", "2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN ELECTRONICS TECHNOLOGY", "2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN FOOD TECHNOLOGY", "2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN GARMENTS AND TEXTILE TECHNOLOGY", "2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN REFRIGERATION AND AIR CONDITIONING TECHNOLOGY", "2-YEAR TRADE TECHNICAL CURRICULUM IN TECHNICAL DRAFTING TECHNOLOGY", "3-YEAR DIPLOMA OF TECHNOLOGY IN AUTOMOTIVE ENGINEERING TECHNOLOGY", "3-YEAR DIPLOMA OF TECHNOLOGY IN CIVIL ENGINEERING TECHNOLOGY", "3-YEAR DIPLOMA TECHNOLOGY IN ELECTRICAL ENGINEERING TECHNOLOGY", "3-YEAR DIPLOMA IN TECHNOLOGY IN ELECTRONICS AND COMMUNICATION TECHNOLOGY", "3-YEAR DIPLOMA OF TECHNOLOGY IN FOOD PRODUCTION AND SERVICES MANAGEMENT", "3-YEAR DIPLOMA OF TECHNOLOGY in garments FASHION AND DESIGN TECHNOLOGY", "3-YEAR DIPLOMA OF TECHNOLOGY IN HOSPITALITY MANAGEMENT TECHNOLOGY", "3-YEAR DIPLOMA OF TECHNOLOGY IN INFORMATION TECHNOLOGY", "3-YEAR TRADE INDUSTRIAL TECHNICAL EDUCATION IN WELDING AND FABRICATION TECHNOLOGY"],
      options: ["Non-Food Relate", "Food Relate"],
      medical: {
        "Non-Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
        "Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
      },
    },
    "College of Teacher Education": {
      courses: ["BEED-BACHELOR OF ELEMENTARY EDUCATION", "BSED ENGLISH-BACHELOR OF SECONDARY EDUCATION MAJOR IN ENGLISH", "BSED MATH-BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS", "BPED-BACHELOR OF PHYSICAL EDUCATION", "BTVTED AUTO-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN AUTOMOTIVE TECHNOLOGY", "BTVTED CIVIL-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN CIVIL AND CONSTRUCTION TECHNOLOGY", "BTVTED DRAFT", "BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN DRAFTING TECHNOLOGY", "BTVTED ELECT-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN ELECTRICAL EDUCATION", "BTVTED ELEXT-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN ELECTRONICS TECHNOLOGY", "BTVTED GFD-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN FASHION, GARMENTS AND TECHNOLOGY", "BTVTED FSM-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN FOOD SERVICE MANAGEMENT", "BTVTED HVAC-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN HEATING, VENTILATING AND AIR CONDITIONING TECHNOLOGY", "BTVTED WAFT-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN WELDING AND FABRICATION TECHNOLOGY", "BTLED HE-BACHELOR OF TECHNOLOGY AND LIVELIHOOD EDUCATION IN HOME ECONOMICS", "BTLED IA-BACHELOR OF TECHNOLOGY AND LIVELIHOOD EDUCATION IN INDUSTRIAL ARTS", "BTLED ICT-BACHELOR OF TECHNOLOGY AND LIVELIHOOD EDUCATION IN INFORMATION AND COMMUNICATION TECHNOLOGY"],
      options: ["Non-Food Relate", "Food Relate"],
      medical: {
        "Non-Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
        "Food Relate": ["X-Ray", "Drug test", "CBC w/ platelet count", "Blood Type"],
      },
    },
  };

  function populateCourses() {
    const selectedDepartment = departmentSelect.value;
    const departmentDataEntry = departmentData[selectedDepartment] || { courses: [] };

    coursesSelect.innerHTML = "";

    departmentDataEntry.courses.forEach(course => {
      const option = document.createElement("option");
      option.value = course;
      option.textContent = course;
      coursesSelect.appendChild(option);
    });

    // put value on medical
    populateOptions();
    populateMedical();
  }

  function populateOptions() {
    const selectedDepartment = departmentSelect.value;
    const selectedCourse = coursesSelect.value;
    const departmentDataEntry = departmentData[selectedDepartment] || { options: [] };

    optionSelect.innerHTML = "";

    departmentDataEntry.options.forEach(option => {
      const optionElement = document.createElement("option");
      optionElement.value = option;
      optionElement.textContent = option;
      optionSelect.appendChild(optionElement);
    });
  }

  function populateMedical() {
    const selectedDepartment = departmentSelect.value;
    const departmentDataEntry = departmentData[selectedDepartment] || { medical: [] };

    medicalSelect.innerHTML = "";

    const selectedOption = optionSelect.value;
    const medicalOptions = departmentDataEntry.medical[selectedOption] || [];

    medicalOptions.forEach(medical => {
      const medicalElement = document.createElement("option");
      medicalElement.value = medical;
      medicalElement.textContent = medical;
      medicalSelect.appendChild(medicalElement);
    });
  }

  departmentSelect.addEventListener("change", populateCourses);
  coursesSelect.addEventListener("change", populateOptions);
  optionSelect.addEventListener("change", populateMedical);

  
  populateCourses();
</script>

<!---- MEDICAL REQUIREMENTS ---->
<style>
    /* Style the select box */
    select {
      color: white;
      margin-left: 5px;
      padding: 10px;
      font-size: 16px;
      background: maroon;
    }

    /* Style the content div */
    .content {
      color : white;
      display: none; /* Initially hide the content */
      padding: 20px;
      border: 1px solid #ccc;
      margin-top: 10px;
    }
  </style>
</head>
<body>


<div class="section-title">
  <h2>MEDICAL STEPS</h2>
  <p>GUIDELINES</p>
</div>

<!-- Create the dropdown menu -->
<select id="selectOption" onchange="showContent()">
  <option value="option1" selected>Option 1</option>
  <option value="option2">Option 2</option>
  <option value="option3">Option 3</option>
</select>

<!-- Create the content divs -->
<div id="option1Content" class="content">
  <h3>Option 1 Content</h3>
  <p>This is the content for Option 1.</p>
</div>

<div id="option2Content" class="content">
  <h3>Option 2 Content</h3>
  <p>This is the content for Option 2.</p>
</div>

<div id="option3Content" class="content">
  <h3>Option 3 Content</h3>
  <p>This is the content for Option 3.</p>
</div>

<!-- JavaScript to show/hide content -->
<script>
  function showContent() {
    var select = document.getElementById("selectOption");
    var selectedValue = select.value;

    // Hide all content divs
    var contentDivs = document.getElementsByClassName("content");
    for (var i = 0; i < contentDivs.length; i++) {
      contentDivs[i].style.display = "none";
    }

    // Show the content div corresponding to the selected option
    document.getElementById(selectedValue + "Content").style.display = "block";
  }

  // Show the content for the initially selected option
  showContent();
</script>





    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctor and Nurses</h2>
          <p>Medical and Dental Clinic Staff.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Franz Chezka Kathrize A. Ochotorena, M.D.</h4>
                <span>Head of Medical Dental Clinic</span>
                <p>saying</p>
                <div class="social">
                  <a href=""><i class="ri-facebook-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nurse</h4>
                <span></span>
                <p> saying</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nurse</h4>
                <span></span>
                <p>saying</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nurse</h4>
                <span>Neurosurgeon</span>
                <p>saying</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/.jpg" class="testimonial-img" alt="">
                  <h3>Dr Nelson P. Cabral</h3>
                  <h4>University President </h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    saying                    
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/.jpg" class="testimonial-img" alt="">
                  <h3>Dr. Roy Valesco</h3>
                  <h4>VPAA</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    saying
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/.jpg" class="testimonial-img" alt="">
                  <h3>Collin Cenecero</h3>
                  <h4>VP</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      saying
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/.jpg" class="testimonial-img" alt="">
                  <h3>Sula sula</h3>
                  <h4>VPFM</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    saying
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/ert.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/ert.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wew.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/wew.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/yay.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/yay.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/loko.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/loko.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/bb.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/bb.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/susjpg" class="galelry-lightbox">
                <img src="assets/img/gallery/sus.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/nu.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/nu.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/weh.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/weh.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1177.5569773751654!2d122.05898674423827!3d6.912857923478634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x325041ddc653c873%3A0xe6618d24408bbb26!2sZamboanga%20Peninsula%20Polytechnic%20State%20University!5e0!3m2!1sen!2sph!4v1694530813023!5m2!1sen!2sph" style="border:0; width: 100%; height: 350px;"></iframe>
        
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Zamboanga Peninsula Polythecnic Stat</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>zppsu.healthservices@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(062) 991-7756</p>
              </div>

            </div>

          </div>
<style>
  button[type="submit"] {
    background-color: #ff6666;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Hover effect for the button */
button[type="submit"]:hover {
    background-color: #cc3333;
}
</style>
          <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="http://localhost/Zppsu_Medical/send.php" method="post">
  <div class="row">
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="email" class="form-control" name="custom_email" id="custom_email" placeholder="Your Email" required>
    </div>
  </div>
  <div class="form-group mt-3">
    <input type="text" class="form-control" name="custom_subject" id="custom_subject" placeholder="Subject" required>
  </div>
  <div class="form-group mt-3">
    <textarea class="form-control" name="custom_message" rows="5" placeholder="Message" required></textarea>
  </div>
  <div class="my-3">
  <div class="alert alert-success" id="success-message" style="display: none;">
      Email sent successfully.
  </div>
  <div class="text-center"><button type="submit" name="custom_submit">Send Message</button></div>
</form>
</div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>



  <script src="http://localhost/Zppsu_Medical/assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>