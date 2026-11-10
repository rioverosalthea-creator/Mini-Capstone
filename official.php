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
    <li>
        <a href="AboutUs.php" class="nav-link">About Us</a>
    </li>
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
   </div>
    </section>
    
    <section id="Home">
        <div class="home">
            <img src="pitogobg.jpg" alt="BarangayBg" class="bg-image">
            <h1>Barangay Officials</h1>
            <p>Your trusted community hub for information and services.</p>
        </div>
        <div class="button-container">
        </div>
    </section>

    
    <section id="Official">
        <div class="official-info">
            <h2><center>Barangay Officials</center></h2>
            <p><center>Meet the dedicated individuals who serve our community.</center></p>

            <h2><center>Punong Barangay</center></h2>
            <div class = "kapitan-card">
                <h3>Hon. Wilson A. Argulla</h3>
                <p>Punong Barangay</p>
            </div>

            <h2><center>Barangay Kagawad</center></h2>

            <div class = "kagawad-card">

                <div class="kagawad-content">
                    <h3>Hon. Ronald Allan A. Musa</h3>
                    <p>Commision on Appropriations</p>
                </div>

                <div class="kagawad-content">
                    <h3>Hon. Joey B. Lejana</h3>
                    <p>Commision on Peace &  Order and BADAC (Barangay Anti-Drug Abuse Council)</p>
                </div>

                <div class="kagawad-content">
                    <h3>Hon. Aldwin F. Sampayo</h3>
                    <p>Commision on Education/Culture/Human Rights</p>
                </div>

                <div class="kagawad-content">
                    <h3>Hon. Russel M. Rioveros</h3>
                    <p>Commision on BDRRM (Barangay Disaster Risk Reduction and Management) and Solid Waste</p>
                </div>

                <div class="kagawad-content">
                    <h3>Hon. Eloisa M. Formarejo</h3>
                    <p>Commision on Women and Family</p>
                </div>

                <div class="kagawad-content">
                    <h3>Hon. Joseph G. Escalona</h3>
                    <p>Commision on Public Works and Infrastructure Development</p>
                </div>

                <div class="kagawad-content">
                    <h3>Hon. Fernando D. Abrencillo Jr.</h3>
                    <p>Commision on Agriculture</p>

                </div>
            </div>

            <h2><center>Sangguniang Kabataan</center></h2>
            <div class = "sk-card">
                <h3>Hon. SK Elgene S. De Tobio</h3>
                <p>Commision on Youth Sports and Development</p>
            </div>

            <h3><center>Bids and Awards Committee (BAC)</center></h3>
            <div class = "bac-container">
                <div class ="bac-card">
                    <h3>Hon. Aldwin F. Sampayo</h3>
                    <p>Vice BAC</p>
                </div>

                <div class ="bac-card">
                    <h3>Hon. Ronald Allan A. Musa</h3>
                    <p>BAC Chairman</p>
                </div>
            </div>
        </div>
    </section>

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