<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Barangay Pag-asa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="dashboard-body">

    <aside class="sidebar">
        <div class="sidebar-brand">
            <img src="logo.png" alt="Logo">
            <h2>Barangay Pag-asa</h2>
        </div>
        <div class="sidebar-user">
            <div class="avatar-circle"><i class="fa-solid fa-user-shield"></i></div>
            <div class="sidebar-user-info">
                <h4>Admin User</h4>
                <p>Administrator</p>
            </div>
        </div>
        <div class="sidebar-menu-title">Navigation</div>
        <ul class="sidebar-menu">
            <li><a href="#" class="active"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li><a href="adminGallery.php"><i class="fa-solid fa-images"></i></i> Gallery</a></li>
            <li><a href="#"><i class="fa-solid fa-file-lines"></i> Clearances</a></li>
            <li><a href="#"><i class="fa-solid fa-bullhorn"></i> Announcements</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
    </aside>

    <div class="main-content">
        
        <header class="top-header">
            <div class="header-title">
                <h1>Dashboard</h1>
                <p>Welcome to Barangay Pag-asa Portal</p>
            </div>
            <div class="header-right">
                <div class="admin-profile-pill">
                    <i class="fa-solid fa-circle-user"></i>
                    <span>Admin User</span>
                </div>
            </div>
        </header>
    </div>

    <div class="dashboard-container">

            <div class="admin-card">
                <div class="admin-card-heading">
                    <h3><i class="fa-solid fa-cloud-arrow-up"></i> Upload New Gallery Photo</h3>
                </div>
                <div class="admin-card-body">
                    <form action="/Mini Capstone/admingallery1.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="admin-form-group">
                            <label>Pick an image</label>
                            <input type="file" name="gallery_image" accept="image/*" required>
                        </div>

                        <div class="admin-form-group">
                            <label>Enter your caption</label>
                            <input type="text" name="caption" placeholder="Ex. Barangay Clean-Up Drive 2026" required>
                        </div>

                        <button type="submit" class="action-btn">
                            <i class="fa-solid fa-upload"></i> I-upload sa Gallery
                        </button>
                    </form>
                </div>
            </div>

        </div>
</div>

</body>
</html>