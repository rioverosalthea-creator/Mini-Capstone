<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Announcement | Barangay Pag-asa</title>
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
            <li><a href="admin_dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li><a href="adminGallery.php"><i class="fa-solid fa-images"></i> Gallery</a></li>
            <li><a href="#"><i class="fa-solid fa-file-lines"></i> Clearances</a></li>
            <li><a href="announcement_admin.php" class="active"><i class="fa-solid fa-bullhorn"></i> Announcements</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
    </aside>

    <div class="main-content">
        <header class="top-header">
            <div class="header-title">
                <h1>Announcements Management</h1>
                <p>Publish updates to connect directly to the user dashboards</p>
            </div>
            <div class="header-right">
                <div class="admin-profile-pill">
                    <i class="fa-solid fa-circle-user"></i>
                    <span>Admin User</span>
                </div>
            </div>
        </header>

        <div class="dashboard-container">

            <div class="admin-card">
                <div class="admin-card-heading">
                    <h3><i class="fa-solid fa-bullhorn"></i> Upload New Announcement</h3>
                </div>
                <div class="admin-card-body">
                    <form action="announcement_admin.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="admin-form-group">
                            <label>Announcement Title</label>
                            <input type="text" name="title" placeholder="Ex. Community Assembly Notice" required>
                        </div>

                        <div class="admin-form-group">
                            <label>Announcement Details / Content</label>
                            <textarea name="content" rows="4" placeholder="Write full announcement details here..." required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px;"></textarea>
                        </div>

                        <div class="admin-form-group">
                            <label>Attachment / Image (Optional)</label>
                            <input type="file" name="announcement_image" accept="image/*">
                        </div>

                        <button type="submit" class="action-btn">
                            <i class="fa-solid fa-upload"></i> Publish Announcement
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>
</html>