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
    </li>
            </ul>
    </section>
    
    <section id="Home">
        <div class="home">
            <img src="pitogobg.jpg" alt="BarangayBg" class="bg-image">
            <h1>Barangay Officials</h1>
            <p>Your trusted community hub for information and services.</p>
        </div>
        <div class="button-container">
            <button class="btn1">
                <i class="fa-solid fa-screwdriver-wrench icon22"></i>
                <a class ="btntxt" href="#services">Explore Services</a>
            </button>
            <button class="btn2">
                <i class="fa-solid fa-door-open icon22"></i>
                <a class = "btntxt" href="#Portal">Resident Portal</a>
            </button>
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
</body>
</html>