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
            <li><a href="admin_dashboard.php" class="active"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li><a href="clearance.php"><i class="fa-solid fa-file-lines"></i> Clearances</a></li>
            <li><a href="admin_announcements.php"><i class="fa-solid fa-bullhorn"></i> Announcements</a></li>
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

        <div class="dashboard-container">

            <div class="stats-row">
                <div class="stat-box">
                    <div class="stat-icon-box"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-details">
                        <h3>491</h3>
                        <p>Total Residents</p>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="stat-icon-box"><i class="fa-solid fa-file-lines"></i></div>
                    <div class="stat-details">
                        <h3></h3>
                        <p>Pending Clearances</p>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="stat-icon-box"><i class="fa-solid fa-bullhorn"></i></div>
                    <div class="stat-details">
                        <h3></h3>
                        <p>Announcements</p>
                    </div>
                </div>
                <div class="stat-box highlight-box">
                    <div class="stat-icon-box"><i class="fa-solid fa-star"></i></div>
                    <div class="stat-details">
                        <h3></h3>
                        <p>System Rating</p>
                    </div>
                </div>
            </div>

            <div class="content-grid">

                <div class="dashboard-card left-card">
                    <div class="card-header-flex">
                        <h3>Recent Resident Activities</h3>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="act-avatar"><i class="fa-solid fa-user"></i></div>
                            <div class="act-info">
                                <h4></h4>
                                <p></p>
                            </div>
                            <span class="act-stat success"></span>
                        </div>
                        <div class="activity-item">
                            <div class="act-avatar"><i class="fa-solid fa-user"></i></div>
                            <div class="act-info">
                                <h4></h4>
                                <p></p>
                            </div>
                            <span class="act-stat pending"></span>
                        </div>
                    </div>
                </div>

                <div class="right-column-grid">
                    <div class="dashboard-card small-card">
                        <h4>Total Clearances Issued</h4>
                        <div class="card-metric-trend">
                            <h2></h2>
                            <span class="trend-up"><i class="fa-solid fa-arrow-up"></i> </span>
                        </div>
                    </div>
                    <div class="dashboard-card small-card green-bg">
                        <h4>Monthly Income Status</h4>
                        <div class="card-metric-trend white-text">
                            <h2>₱60,000</h2>
                            <span class="trend-badge"></span>
                        </div>
                    </div>
                </div>

            </div>

             <div class="dashboard-containers">

            <div class="admin-card">
                <div class="admin-card-heading">
                    <h3><i class="fa-solid fa-cloud-arrow-up"></i> Upload New Gallery Photo</h3>
                </div>
                <div class="admin-card-body">
                    <form action="upload_process.php" method="POST" enctype="multipart/form-data">
                        
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
    </div>

</body>
</html>