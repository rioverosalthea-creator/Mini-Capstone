<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Capstone</title>
    <link rel="stylesheet" href="style.css?v=1.1">
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
        <li><a href="AboutUs.php" class="nav-link">About Us</a></li>
        <li><a href="index.php#services" class="nav-link">Services</a></li>
        <li><a href="announcement.php" class="nav-link">Announcement</a></li>
        <li><a href="official.php" class="nav-link">Official</a></li>

        <div class="navbar-clock">
            <div id="currentTime"></div>
            <div id="currentDate"></div>
        </div>

        <div class="profile-dropdown">
        <button type="button" class="profile-btn" onclick="toggleProfile()">
            <i class="fas fa-user-circle"></i>
            Profile
            <i class="fas fa-chevron-down"></i>
        </button>
        <div class="dropdown-menu" id="profileMenu">
            <a href="profile.php">My Profile</a>
            <a href="settings.php">Account Settings</a>
            <hr>
            <a href="logout.php" class="logout">Logout</a>
        </div>
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
            <div class="heading-line"></div>
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
                <div class="heading-line"></div>
                <p>We offer a range of services to support our community, including:</p>
                <div class="service-list">
                    <div class="service-item"><p>Clearances</p>
                        <i class="fa-solid fa-calendar custom-icon1"></i>
                        <h5>Get Barangay Clearances for various purposes with digital processing.</h5>
                        <button class="btn6">
                            <a class = "btntxt" href="BarangayClearance.php">Get Clearances</a>
                        </button>
                    </div>
                    <div class="service-item"><p>Complaint Resolution</p>
                        <i class="fa-solid fa-triangle-exclamation custom-icon2"></i>
                        <h5>Get your complaints resolved efficiently and effectively.</h5>
                        <button class="btn6">
                            <a class = "btntxt"href="Complaint.php">View Complaints</a>
                        </button>   
                    </div>
                    <div class="service-item"><p>Certificates</p>
                        <i class="fa-solid fa-file-lines custom-icon3"></i>
                        <h5>Request official barangay certificates.</h5>
                        <button class="btn6">
                            <a class = "btntxt" href="Certificates.php">Request Certificates</a>
                        </button>
                    </div>
                    <div class="service-item"><p>Request</p>
                        <i class="fa-solid fa-file-circle-question custom-icon4"></i>
                        <h5>Request barangay services such as waste collection, and streetlight repairs.</h5>
                        <button class="btn6">
                            <a class = "btntxt"href="Request.php">Request Services</a>
                        </button>
                    </div>
                </div>
            </div>
    </section>

<section class="hotlines-section">

    <div class="hotlines-heading">
        <h1>Emergency Hotlines</h1>
        <div class="heading-line"></div>
        <p>
            Quick access to emergency services for your safety and
            community protection.
        </p>
    </div>

    <div class="hotlines-container">

        <div class="hotline-card local-card">

            <div class="hotline-icon">
                <i class="fas fa-phone"></i>
            </div>

            <h2>Quezon Province Hotlines</h2>

            <p>
                Local emergency services and government contacts
                for residents.
            </p>

            <button onclick="openModal('localModal')">
                View Contacts <i class="fas fa-arrow-right"></i>
            </button>

        </div>

        <div class="hotline-card national-card">

            <div class="hotline-icon">
                <i class="fas fa-phone"></i>
            </div>

            <h2>National Hotlines</h2>

            <p>
                PNP, NDRRMC, MMDA, Red Cross and other
                national agencies.
            </p>

            <button onclick="openModal('nationalModal')">
                View Contacts <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>

<div class="hotline-modal" id="localModal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Quezon Province Emergency Hotlines</h2>
            <button class="close-btn" onclick="closeModal('localModal')">
                &times;
            </button>
        </div>

        <div class="modal-body">

            <h3>Local Emergency Services</h3>

            <div class="hotline-info">
                <h4>Barangay Emergency Contact</h4>
                <p>0981-488-1827</p>
            </div>
            <div class="hotline-info">
                <h4>Municipal Disaster Risk Reduction Office</h4>
                <p>0920-653-2981</p>
            </div>
            <div class="hotline-info">
                <h4>Municipal Police Station</h4>
                <p>+63 939-440-0053</p>
                <p>+63 998-598-5768</p>
                <p>+63 998-967-3498</p>
            </div>
        </div>

        <button class="modal-close" onclick="closeModal('localModal')">
            Close
        </button>
    </div>
</div>

<div class="hotline-modal" id="nationalModal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>National Emergency Hotlines</h2>
            <button class="close-btn" onclick="closeModal('nationalModal')">
                &times;
            </button>
        </div>

        <div class="modal-body">

            <h3>National Emergency Services</h3>

            <div class="hotline-info">
                <h4>National Emergency Hotline</h4>
                <p>911</p>
            </div>

            <div class="hotline-info">
                <h4>Philippine National Police (PNP)</h4>
                <p>9-117/8723-0401/8537-4500</p>
            </div>

            <div class="hotline-info">
                <h4>Philippine Red Cross</h4>
                <p>143</p>
            </div>

            <div class="hotline-info">
                <h4>National Disaster Risk Reduction and Management Council</h4>
                <p>(049) 531-7266</p>
            </div>
        </div>
        <button class="modal-close" onclick="closeModal('nationalModal')">
            Close
        </button>
    </div>
</div>

<footer class="footer">
    <div class="footer-container">

        <div class="footer-about">
            <div class="footer-brand">
                <img src="logo.png" alt="Barangay Logo">

                <div>
                    <h3>Barangay Pag-asa</h3>
                    <p>Pitogo, Quezon</p>
                </div>
            </div>

            <p class="footer-description">
                Serving our community with accessible and reliable
                public services.
            </p>
        </div>

        <div class="footer-links">
            <h3>Quick Links</h3>

            <a href="index.php">› Home</a>
            <a href="AboutUs.php">› About Us</a>
            <a href="announcement.php">› Announcements</a>
            <a href="official.php">› Officials</a>
        </div>

    </div>

    <div class="footer-contact">

        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>

            <div>
                <h4>Location</h4>
                <p>Barangay Pag-asa, Pitogo, Quezon</p>
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-phone"></i>
            </div>

            <div>
                <h4>Hotline</h4>
                <p>0981-488-1827</p>
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
            </div>

            <div>
                <h4>Email</h4>
                <a href="mailto: lgu.pitogoquezon@yahoo.com"> lgu.pitogoquezon@yahoo.com</a></p>
            </div>
        </div>

    </div>

    <div class="footer-bottom">

        <p>© 2026 Barangay Pag-asa. All rights reserved.</p>

        <div class="footer-legal">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Disclaimer</a>
        </div>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>