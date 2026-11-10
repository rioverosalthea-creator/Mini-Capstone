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

<?php //include 'navbar.php'; ?>

<main class="profile-page">

    <div class="profile-heading">
        <div>
            <h1><i class="fas fa-user-circle"></i> My Profile</h1>
            <p>View and manage your personal information.</p>
        </div>

        <div class="profile-breadcrumb">
            <a href="index.php">Home</a>
            <span>/</span>
            <span>My Profile</span>
        </div>
    </div>

    <section class="profile-summary">

        <div class="profile-picture">
            <i class="fas fa-user"></i>
        </div>

        <div class="profile-summary-info">
            <h2>Resident Name</h2>
            <span class="resident-badge">Barangay Resident</span>

            <div class="profile-meta">
                <span>
                    <i class="fas fa-user"></i>
                    Resident
                </span>

                <span>
                    <i class="fas fa-calendar-alt"></i>
                    Member since: January 2025
                </span>
            </div>
        </div>

        <button type="button" class="edit-profile-btn"
            onclick="openEditProfile()">
            <i class="fas fa-edit"></i>
            Edit Profile
        </button>        

    </section>  

    <section class="profile-information">

        <div class="profile-card">

            <div class="card-heading">
                <h3>
                    <i class="fas fa-id-card"></i>
                    Personal Information
                </h3>
            </div>

            <div class="information-list">

                <div class="information-item">
                    <label>Full Name</label>
                    <p>Resident Name</p>
                </div>

                <div class="information-item">
                    <label>Date of Birth</label>
                    <p>Month DD, YYYY</p>
                </div>

                <div class="information-item">
                    <label>Sex</label>
                    <p>Not specified</p>
                </div>

                <div class="information-item">
                    <label>Civil Status</label>
                    <p>Not specified</p>
                </div>

                <div class="information-item">
                    <label>Occupation</label>
                    <p>Not specified</p>
                </div>

                <div class="information-item">
                    <label>Complete Address</label>
                    <p>Barangay Pag-asa, Pitogo, Quezon</p>
                </div>

            </div>

        </div>

        <div class="profile-card">

            <div class="card-heading">
                <h3>
                    <i class="fas fa-address-book"></i>
                    Contact Information
                </h3>
            </div>

            <div class="information-list">

                <div class="information-item">
                    <label>Mobile Number</label>
                    <p>Not provided</p>
                </div>

                <div class="information-item">
                    <label>Email Address</label>
                    <p>Not provided</p>
                </div>

                <div class="information-item">
                    <label>Emergency Contact</label>
                    <p>Not provided</p>
                </div>

                <div class="information-item">
                    <label>Emergency Contact Number</label>
                    <p>Not provided</p>
                </div>

            </div>

        </div>

        <div class="profile-card">

            <div class="card-heading">
                <h3>
                    <i class="fas fa-home"></i>
                    Household Information
                </h3>
            </div>

            <div class="information-list">

                <div class="information-item">
                    <label>Household Number</label>
                    <p>Not provided</p>
                </div>

                <div class="information-item">
                    <label>Family Head</label>
                    <p>Not provided</p>
                </div>

                <div class="information-item">
                    <label>Purok</label>
                    <p>Not provided</p>
                </div>

            </div>

        </div>

        <div class="profile-card">

            <div class="card-heading">
                <h3>
                    <i class="fas fa-lock"></i>
                    Account Information
                </h3>
            </div>

            <div class="information-list">

                <div class="information-item">
                    <label>Username</label>
                    <p>Resident Username</p>
                </div>

                <div class="information-item">
                    <label>Account Type</label>
                    <p>Resident</p>
                </div>
            </div>
        </div>
    </section>

<div class="profile-modal" id="editProfileModal">

    <div class="profile-modal-content">

        <div class="profile-modal-header">
            <h2><i class="fas fa-user-edit"></i> Edit Profile</h2>

            <button type="button" class="close-profile-modal"
                    onclick="closeEditProfile()">
                &times;
            </button>
        </div>

        <form id="editProfileForm">

            <h3>Personal Information</h3>

            <div class="edit-form-grid">

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" id="editFullName"
                           placeholder="Enter full name" required>
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" id="editBirthDate">
                </div>

                <div class="form-group">
                    <label>Sex</label>
                    <select id="editSex">
                        <option value="">Select sex</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Civil Status</label>
                    <select id="editCivilStatus">
                        <option value="">Select status</option>
                        <option>Single</option>
                        <option>Married</option>
                        <option>Widowed</option>
                        <option>Separated</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Occupation</label>
                    <input type="text" id="editOccupation"
                           placeholder="Enter occupation">
                </div>

                <div class="form-group full-width">
                    <label>Complete Address</label>
                    <input type="text" id="editAddress"
                           placeholder="Enter complete address">
                </div>

            </div>

            <h3>Contact Information</h3>

            <div class="edit-form-grid">

                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="tel" id="editMobile"
                           placeholder="Enter mobile number">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" id="editEmail"
                           placeholder="Enter email address">
                </div>

                <div class="form-group">
                    <label>Emergency Contact</label>
                    <input type="text" id="editEmergencyName"
                           placeholder="Emergency contact name">
                </div>

                <div class="form-group">
                    <label>Emergency Contact Number</label>
                    <input type="tel" id="editEmergencyNumber"
                           placeholder="Emergency contact number">
                </div>

            </div>

            <div class="profile-modal-actions">
                <button type="button" class="cancel-btn"
                        onclick="closeEditProfile()">
                    Cancel
                </button>

                <button type="submit" class="save-btn">
                    <i class="fas fa-save"></i> Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

<section class="request-status-section">

    <div class="request-status-heading">
        <div>
            <h2>My Request Status</h2>
            <p>Track the progress of your barangay requests.</p>
        </div>
    </div>

    <?php if (!empty($requests)): ?>

        <div class="request-status-list">

            <?php foreach ($requests as $request): ?>

                <div class="request-status-card">

                    <div class="request-details">
                        <h3><?php echo htmlspecialchars($request['request_type']); ?></h3>

                        <p>Request ID:
                            <?php echo htmlspecialchars($request['request_id']); ?>
                        </p>

                        <p>Date Submitted:
                            <?php echo htmlspecialchars($request['date_submitted']); ?>
                        </p>
                    </div>

                    <span class="status <?php echo strtolower($request['status']); ?>">
                        <?php echo htmlspecialchars($request['status']); ?>
                    </span>

                </div>

            <?php endforeach; ?>

        </div>

    <?php else: ?>

        <div class="no-requests">
            <i class="fas fa-file-circle-plus"></i>
            <h3>No Requests Yet</h3>
            <p>You haven't submitted any barangay requests yet.</p>
        </div>

    <?php endif; ?>

</section>


</main>

<script src="script.js"></script>
<script src="profile.js"></script>

</body>
</html>
