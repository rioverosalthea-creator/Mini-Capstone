 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Capstone</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<?php 
    //include __DIR__ . '/navbar.php'; 
?>

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
            <div class ="Latest">
                <div class="announcement2">
                    <h1> Latest Announcements</h1>
                    <p>Stay updated with the latest news and announcements from Barangay Pag-asa.</p>
                </div>

                <div class="announcements-filler">
                    <i class="fa-solid fa-inbox inboxicon"></i>
                    <p>No announcements available at this time.</p>
                </div>
                <div class="button-announcement">
                    <button class="btn6" onclick="openGalleryModal()">
                        <span class="btntxt">View All Announcements</span>
                    </button>
                </div>
            </div>
            <div id="announcementModal" class="modal-overlay1">
                <div class="modal-card">
                
                    <div class="modal-header">
                        <div class="header-title">
                        <i class="fa-solid fa-bullhorn"></i>
                        <span>All Announcements</span>
                        </div>
                        <button class="close-btn" onclick="closeGalleryModal()">&times;</button>
                    </div>

                    <div class="modal-filter-bar">
                        <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        <input type="text" placeholder="Search announcements...">
                        </div>
                        <select class="category-select">
                        <option value="all">All Categories</option>
                        </select>
                    </div>

                    <div class="modal-body">
                        <div class="empty-state">
                        <i class="fa-solid fa-inbox modal-inbox-icon"></i>
                        <p>No announcements available.</p>
                        </div>
                    </div>

                </div>
            </div>
            


        <div id="Gallery">
            <h1>Photo Gallery</h1>
                <div class="gallery-content">
                    <p>Browse photos of community events, programs, and activities.</p>
                </div>
                <button class="btn6 btntxt" data-bs-toggle="modal" data-bs-target="#galleryModal">
                    View Photo
                </button>
        </div>
        <div id="galleryModal" class="modal-overlay">

            <div id="Gallery">
                <div class = "gallerypic">
                    <div class="gallerypic-card">
                        <img src="photogallery.jpg" class="img-fluid rounded shadow-sm" alt="Event 2">
                    </div>

                    <div class="gallerypic-card">
                        <img src="photogallery2.jpg" class="img-fluid rounded shadow-sm" alt="Event 2">
                    </div>

                    <div class="gallerypic-card">
                        <img src="photogallery3.jpg" class="img-fluid rounded shadow-sm" alt="Event 2">
                    </div>

                    <div class="gallerypic-card">
                        <img src="photogallery4.jpg" class="img-fluid rounded shadow-sm" alt="Event 2">
                    </div>

                    <div class="gallerypic-card">
                        <img src="photogallery5.jpg" class="img-fluid rounded shadow-sm" alt="Event 2">
                    </div>

                    <div class="gallerypic-card">
                        <img src="photogallery6.jpg" class="img-fluid rounded shadow-sm" alt="Event 2">
                    </div>
                </div>
            </div>

        </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>