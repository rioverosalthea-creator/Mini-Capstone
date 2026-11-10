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

   <section id="aboutUs">
   <section id="Home">
        <div class="home">
            <img src="pitogobg.jpg" alt="BarangayBg" class="bg-image">
            <h1>Our Identity, Mission, and History</h1>
            <p>Founded on a legacy of community resilience and growth, Barangay Pag-asa strives to deliver transparent, proactive public service while aspiring to build a peaceful, progressive, and self-reliant community where empowered residents thrive in unity and hope.</p>
            <p>Established in 1766, we've been the integral part of Pitogo's central Poblacion</p>
        </div>
    </section>
 
    <section id="AboutBarangay">
        <div class="aboutBarangay">
            <h1>About Us</h1>
            <div class="heading-line"></div>
            <p><center>Welcome to Barangay Pag-asa! We are dedicated to serving our community with integrity and excellence.</center></p>

            <div class="about-content">

                <div class="mission">
                    <h2><center>Our Mission (Misyon)</center></h2>
                    <p>"Magbigay ng dekalidad na serbisyong pampubliko sa pamamagiatn ng makabuluhang mga programa at proyekto na nagtataguyod ng pagkakaisa, kaunlaran, at pangangalaga sa kalikasan, habang sinisiguro ang kaligtasan at kapakanan ng bawat mamamayan ng barangay"</p>
                    <p class = "highlight">To provide quality public service through meaningful programs and projects that promote unity, development, and environmental protection, while ensuring the safety and welfare of every citizen in the barangay.</p>
                </div>

                <div class="vision">
                    <h2><center>Our Vision (Paniniwala)</center></h2>
                    <p>"Isang maunlad, ligtas at mapayapang barangay na may aktibong mamamayan, maayos na kapaligiran, at sapat na serbisyong panlipunan para sa lahat"</p>
                    <p class = "highlight">A prosperous, safe, and peaceful barangay with active citizens, a well-maintained environment, and sufficient social services for all.</p>
                </div>

                <div class="geographic">
                    <h2><center>Geographic Location</center></h2>
                    <p>Barangay Pag-asa is situated in the central Poblacion area of the coastal municipality of Pitogo, within the province of Quezon in the CALABARZON region (Region IV-A) of the Philippines. Its position places it directly inside the town's historical and administrative core. Being part of Pitogo's Poblacion gives the barangay strategic access to the municipal hall, local health centers, public schools, central markets, and main coastal road networks along the Bondoc Peninsula.
                    The municipality of Pitogo is located in the southern coastal portion of Quezon Province, bordered by the Ragay Gulf to the east and neighboring municipalities such as Macalelon, Unisan, and General Luna. This coastal and peninsular hub positioning makes Barangay Pag-asa a accessible residential and commercial zone for local trade, fishing logistics, and civic gatherings within the town.</p>
                </div>

                <div class="demographic">
                    <h2><center>Demographics</center></h2>
                    <p>Barangay Pag-asa is situated in the central Poblacion area of the coastal municipality of Pitogo, within the province of Quezon in the CALABARZON region (Region IV-A) of the Philippines. Its position places it directly inside the town's historical and administrative core. Being part of Pitogo's Poblacion gives the barangay strategic access to the municipal hall, local health centers, public schools, central markets, and main coastal road networks along the Bondoc Peninsula.
                    The municipality of Pitogo is located in the southern coastal portion of Quezon Province, bordered by the Ragay Gulf to the east and neighboring municipalities such as Macalelon, Unisan, and General Luna. This coastal and peninsular hub positioning makes Barangay Pag-asa a accessible residential and commercial zone for local trade, fishing logistics, and civic gatherings within the town.</p>
                </div>

                <div class="demographic">
                    <h2><center>About Pitogo, Quezon</center></h2>
                    <p>The establishment of Pitogo traces its roots to 1760, when Bernabe Rafael originally established a settlement at Cawayanin. After Moro raiders destroyed the town, the displaced settlers temporarily relocated to a barrio called Adia (meaning "safety"). In 1766, Buenaventura Salvador selected a strategically located hill—Maaliw Hill—to serve as the permanent site for the town because its promontory allowed clear views from a native watchtower (Castillo) to detect approaching Moro vintas from afar. The settlement was named Pitogo after a large, prominent pitogo tree located on the promontory.</p>
                    <p>Under the leadership of Geronimo Santiago (Maniago) from 1771 to 1780, the Poblacion was defended and established around Maaliw Hill, where a stone church for patron saint St. Paul was later built in 1817. As the town evolved over time, the central Poblacion was partitioned into key urban barangays—including Barangay Pag-asa, which directly borders these historical defense and church grounds.</p>
                </div>
            </div>
        </div>
    </section>
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