 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<?php //include 'navbar.php'; ?>

    <section class="navigation">
        <img src="logo.png" alt="Logo">
        <div class="navtxt">
            <div class="nav-title2">Barangay Pag-asa</div>
            <div class="nav-sub2">Pitogo, Quezon</div>
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
                <a href="Profile.php">My Profile</a>
                <a href="AccountSetting.php">Account Settings</a>
                <hr>
                <a href="logout.php" class="logout">Logout</a>
            </div>
        </div>
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
                <a href="#Announcement2">Latest Announcements</a>
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
                <div class="heading-line"></div>
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

        <div class="ug-gallery-section-wrapper">
            <div class="ug-latest-container">
                <div class="ug-header-content">
                    <h1>Photo Gallery</h1>
                    <div class="heading-line"></div>
                    <p>Browse photos of community events, programs, and activities.</p>
                </div>
                <div class="ug-button-wrap">
                    <button class="btn6" onclick="openPhotoGalleryModal()">
                        <span class="btntxt">View All Photos</span>
                    </button>
                </div>
            </div>

            <div id="uniqueGalleryModal" class="ug-custom-modal-overlay">
                <div class="ug-custom-modal-card">
                
                    <div class="ug-custom-modal-header">
                        <div class="ug-custom-header-title">
                            <i class="fa-solid fa-images"></i>
                            <span>Barangay Photo Gallery</span>
                        </div>
                        <button class="ug-custom-close-btn" onclick="closePhotoGalleryModal()">&times;</button>
                    </div>

                    <div class="ug-custom-modal-body">
                        <p>(Click to view full photo)</p>
                        <div class="ug-grid-container">
                            <div class="ug-item-card">
                                <img src="pitogobg.jpg" alt="Gallery Image 1" onclick="previewUgImage(this)">
                            </div>
                            <div class="ug-item-card">
                                <img src="logo.png" alt="Gallery Image 2" onclick="previewUgImage(this)">
                            </div>
                            <div class="ug-item-card">
                                <img src="photogallery.jpg" alt="Gallery Image 3" onclick="previewUgImage(this)">
                            </div>
                            <div class="ug-item-card">
                                <img src="photogallery2.jpg" alt="Gallery Image 4" onclick="previewUgImage(this)">
                            </div>
                            <div class="ug-item-card">
                                <img src="photogallery3.jpg" alt="Gallery Image 5" onclick="previewUgImage(this)">
                            </div>
                            <div class="ug-item-card">
                                <img src="photogallery4.jpg" alt="Gallery Image 6" onclick="previewUgImage(this)">
                            </div>
                            <div class="ug-item-card">
                                <img src="photogallery5.jpg" alt="Gallery Image 7" onclick="previewUgImage(this)">
                            </div>
                            <div class="ug-item-card">
                                <img src="photogallery6.jpg" alt="Gallery Image 8" onclick="previewUgImage(this)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ugPreviewModal" class="ug-preview-overlay" onclick="closeUgPreview()">
                <div class="ug-preview-card" onclick="event.stopPropagation()">
                    <button class="ug-preview-close-btn" onclick="closeUgPreview()">&times;</button>
                    <div class="ug-preview-img-box">
                        <img id="ugPreviewImg" src="" alt="Full Preview Image">
                    </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>