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
    <section class="navigation">
        <img src="logo.png" alt="Logo">
        <div class="navtxt">
            <div class="nav-title">Barangay Pag-asa</div>
            <div class="nav-sub">Pitogo, Quezon</div>
        </div>
            <ul class="nav-bar">
                <li><a href="#Home" class="nav-link">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link">About Us <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#AboutUs">About Barangay</a>
                        <a href="#FAQs">FAQs</a>
                    </div>
                </li>
                <li><a href="#Services" class="nav-link">Services</a></li>
                <li><a href="#Announcement" class="nav-link">Announcement</a></li>
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
            <h1>Barangay Pag-asa</h1>
            <p>Your trusted community hub for information and services.</p>
        </div>
        <div class="button-container">
            <button class="btn1">
                <i class="fa-solid fa-screwdriver-wrench icon22"></i>
                <a class = "btntxt" href="#Services">Explore Services</a>
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
            <p>Stay updated with the latest news and announcements from Barangay Pag-asa.</p>
        </div>

        <div class="button-for-announcement">
            <button class="btn3">
                <a href="#Announcements2">View Announcements</a>
            </button>
            <button class="btn4">
                <a href="#Gallery">Photo Gallery</a>
            </button>
            <button class="btn5">
                <a href="#Calendar">Calendar of Activities</a>
        </button>
        </div>

         <div id="Announcements2">
            <h3>Latest Announcement</h3>
            <div class="announcement-content">
                <p>Important updates and information for our community</p>
            </div>
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

    <section id="Services">
            <div class="services">
                <h2>Our Services</h2>
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

    <section id="Inquiries">
        <div class="inquiries">
            <h2>Inquiries</h2>
            <p>If you have any questions or need assistance, please reach out to us.</p>
        </div>

        <div class ="inquiry-form">
            <h4>Application Information</h4><hr>
            <form action="#" method="post">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Juan Dela Cruz" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="juan@gmail.com" required>

                <label for="number">Contact Number:</label>
                <input type="tel" id="number" name="number" placeholder="09123456789" required>

                <h4>Business Information</h4><hr>
                <label for="businessname">Business Name:</label>
                <input type="text" id="businessname" name="businessname" placeholder="Juan's Sari-Sari Store" required>

                <select id="businesscategory" name="businesscategory" required>
                    <option value="">Select Business Category</option>
                    <option value="Retail">Retail</option>
                    <option value="Food and Beverage">Food and Beverage</option>
                    <option value="Services">Services</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" id="othercategory" name="othercategory" placeholder="Please specify if 'Other'" style="display:none;">

                <label for="businessaddress">Business Address:</label>
                <input type="text" id="businessaddress" name="businessaddress" required>


                <h4>Request Details</h4><hr>
                <label for="purpose-request">Purpose of Request</label>
                <input type="text" cols="6" row="20">

                <button type="submit">Submit</button>
            </form>
    </section>
</body>
</html>

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