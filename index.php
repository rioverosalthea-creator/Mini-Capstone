<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Capstone</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<?php include 'navbar.php'; ?>

    <section class="navigation">
        <img src="logo.png" alt="Logo">
        <div class="navtxt">
            <div class="nav-title">Barangay Pag-asa</div>
            <div class="nav-sub">Pitogo, Quezon</div>
        </div>
        <ul class="nav-bar">
               <li><a href="index.php" class="nav-link">Home</a></li>
        <li class="dropdown">
        <a href="#" class="nav-link">About Us <i class="fa-solid fa-chevron-down"></i></a>
        <div class="dropdown-content">
            <a href="AboutUs.php#AboutUs">About Barangay</a>
            <a href="AboutUs.php#FAQs">FAQs</a>
        </div>
    </li>
    <li><a href="index.php#services" class="nav-link">Services</a></li>
    <li><a href="announcement.php" class="nav-link">Announcement</a></li>
    <li><a href="official.php" class="nav-link">Official</a></li>
    <li class="dropdown">
        <a href="#" class="nav-link">Inquiries <i class="fa-solid fa-chevron-down"></i></a>
        <div class="dropdown-content">
            <a href="index.php#ContactUs">Business Clearance</a>
            <a href="index.php#Feedback">Contact Us</a>
        </div>
        </ul>
    </section>
    
    <section id="Home">
        <div class="home">
            <img src="pitogobg.jpg" alt="BarangayBg" class="bg-image">
            <h1>Barangay Pag-asa</h1>
            <p>Your trusted community hub for information and services.</p>
        </div>
        <div class="button-container">
            <button class="btn1">
                <i class="fa-solid fa-screwdriver-wrench icon22"></i>
                <a class = "btntxt" href="#services">Explore Services</a>
            </button>
            <button class="btn2">
                <i class="fa-solid fa-door-open icon22"></i>
                <a class = "btntxt" href="#Portal">Resident Portal</a>
            </button>
        </div>
    </section>

    <section id="Announcement">
        <div class="announcement">
            <h2> Latest Announcements</h2>
            <i class="fa-solid fa-bullhorn custom-icon33"></i>
            <p>Stay updated with the latest news and announcements from Barangay Pag-asa.</p>
        </div>

        <div class="button-for-announcement">
            <button class="btn6">
                <a class="btntxt" href= "announcement.php">View Announcements</a>
            </button>
</div>
</section>
    <section id="services">
            <div class="services">
                <h2>Comprehensive Barangay Services</h2>
                <p>We offer a range of services to support our community, including:</p>
                <div class="service-list">
                    <div class="service-item"><p>Community Announcements</p>
                        <i class="fa-solid fa-calendar custom-icon1"></i>
                        <h5>Stay informed about the latest news and events in our community.</h5>
                        <button class="btn6">
                            <a class = "btntxt"href="#Announcement">View Announcements</a>
                        </button>
                    </div>
                    <div class="service-item"><p>Complaint Resolution</p>
                        <i class="fa-solid fa-triangle-exclamation custom-icon2"></i>
                        <h5>Get your complaints resolved efficiently and effectively.</h5>
                        <button class="btn6">
                            <a class = "btntxt"href="#Complaint">View Complaints</a>
                        </button>   
                    </div>
                    <div class="service-item"><p>Official Documentation</p>
                        <i class="fa-solid fa-file-lines custom-icon3"></i>
                        <h5>Access and submit official documents for various services.</h5>
                        <button class="btn6">
                            <a class = "btntxt"href="#Documentation">View Documentation</a>
                        </button>
                    </div>
                    <div class="service-item"><p>Inquiries and Assistance</p>
                        <i class="fa-solid fa-file-circle-question custom-icon4"></i>
                        <h5>Get the information and support you need from our team.</h5>
                        <button class="btn6">
                            <a class = "btntxt"href="#Inquiries">View Inquiries</a>
                        </button>
                    </div>
                </div>
            </div>
    </section>

    <section id="Emergency">
    <div class="emergency">
        <h2><center>Emergency Hotlines</center></h2>
    </div>
</section>


</body>
</html>