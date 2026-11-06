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
                        <a href="#AboutUs">About Barangay</a>
                        <a href="#FAQs">FAQs</a>
                    </div>
                </li>
                <li><a href="#Services" class="nav-link">Services</a></li>
                <li><a href="announcement.php" class="nav-link">Announcement</a></li>
                <li><a href="#Official" class="nav-link">Official</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link">Inquiries <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#ContactUs">Business Clearance</a>
                        <a href="#Feedback">Contact Us</a>
                    </div>
                </li>
            </ul>
    </section>
 
 <section id="Home">
        <div class="home">
            <img src="pitogobg.jpg" alt="BarangayBg" class="bg-image">
            <h1>Announcements</h1>
            <p>Stay updated with the latest news and announcements from Barangay Pag-asa.</p>
        </div>
     <div class="button-container">
            <button class="btn3">
                <i class="fa-solid fa-bullhorn"></i>
                <a href="#Announcements2">Latest Announcements</a>
            </button>
            <button class="btn4">
                <i class="fa-solid fa-images"></i>
                <a href="#Gallery">Photo Gallery</a>
            </button>
            <button class="btn5">
                <i class="fa-solid fa-calendar"></i>
                <a href="#Calendar">Calendar of Activities</a>
        </button>
        </div>
    </section>

    <section id="Announcement2">
        <div class="announcement2">
            <h2> Latest Announcements</h2>
            <p>Stay updated with the latest news and announcements from Barangay Pag-asa.</p>
        </div>
        <div class="button-announcement">
            <button class="btn6">
                <a class="btntxt" href= "announcement.php">View All Announcements</a>
            </button>
</div>
         <div id="Gallery">
            <h3>Photo Gallery</h3>
            <div class="gallery-content">
                <p>Browse photos of community events, programs, and activities.</p>
            </div>
        </div>

        <div id="Calendar">
            <h3>Calendar of Activities</h3>
            <div class="calendar-content">
                <p>Check out our upcoming events and activities in the community.</p>
            </div>
        </div>
    </section>

    <section id="AboutUs">
        <div class="about">
            <h2><center>About Us</center></h2>
            <h3><center>Welcome to Barangay Pag-asa! We are dedicated to serving our community with integrity and excellence.</center></h3>

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

            </div>
        </div>
    </section>
</body>
</header>