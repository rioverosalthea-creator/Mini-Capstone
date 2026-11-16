<?php
session_start();

if (
    !isset($_SESSION['user_id']) ||
    !isset($_SESSION['role']) ||
    $_SESSION['role'] !== 'resident'
) {
    header("Location: login.php");
    exit();
}

require_once "db.php";

$user_id = $_SESSION['user_id'];
$profile = $_SESSION['profile'] ?? [];

$userSql = "SELECT * FROM users WHERE user_id = ?";
$userStmt = $conn->prepare($userSql);
$userStmt->bind_param("i", $user_id);
$userStmt->execute();

$userResult = $userStmt->get_result();
$profile = $userResult->fetch_assoc() ?? [];

$userStmt->close();

$documentRequests = [];

$sql = "
    SELECT
        request_id,
        'Barangay Clearance' AS document_type,
        request_status,
        date_submitted
    FROM clearance_requests
    WHERE user_id = ?

    UNION ALL

    SELECT
        request_id,
        'Complaint' AS document_type,
        request_status,
        date_submitted
    FROM complaint_requests
    WHERE user_id = ?

    ORDER BY date_submitted DESC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $user_id, $user_id);
$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $documentRequests[] = $row;
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Barangay Pag-asa</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

<main class="profile-page">

    <div class="profile-heading">
        <div>
            <h1><i class="fas fa-user-circle"></i> My Profile</h1>
            <p>View and manage your personal information.</p>
        </div>

        <div class="profile-breadcrumb">
            <a href="index.php">Home</a>
            <span></span>
            <span>My Profile</span>
        </div>
    </div>

    <section class="profile-summary">

        <div class="profile-picture">
            <i class="fas fa-user"></i>
        </div>

        <div class="profile-summary-info">
            <h2><?= htmlspecialchars($profile['fullname'] ?? '') ?></h2>
            <span class="resident-badge">Barangay Resident</span>

            <div class="profile-meta">
                <span>
                    <i class="fas fa-user"></i>
                    Resident
                </span>

                <span>
                    <i class="fas fa-calendar-alt"></i>
                    <?= htmlspecialchars($profile['birth_date'] ?? '') ?>
                </span>
            </div>
        </div>

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
                    <p><?= htmlspecialchars($profile['fullname'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Date of Birth</label>
                    <p><?= htmlspecialchars($profile['birth_date'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Sex</label>
                    <p><?= htmlspecialchars($profile['sex'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Civil Status</label>
                    <p><?= htmlspecialchars($profile['civil_status'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Occupation</label>
                    <p><?= htmlspecialchars($profile['occupation'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Complete Address</label>
                    <p><?= htmlspecialchars($profile['complete_address'] ?? '') ?></p>
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
                    <p><?= htmlspecialchars($profile['mobile_number'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Email Address</label>
                    <p><?= htmlspecialchars($profile['email'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Emergency Contact Name</label>
                    <p><?= htmlspecialchars($profile['emergency_contact_name'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Emergency Contact Number</label>
                    <p><?= htmlspecialchars($profile['emergency_contact_number'] ?? '') ?></p>
                </div>

            </div>
        </div>

        <div class="profile-card">

            <div class="card-heading">
                <h3>
                    <i class="fas fa-house"></i>
                    Household Information
                </h3>
            </div>

            <div class="information-list">

                <div class="information-item">
                    <label>Household Number</label>
                    <p><?= htmlspecialchars($profile['household_number'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Family Head</label>
                    <p><?= htmlspecialchars($profile['family_head'] ?? '') ?></p>
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
                    <p><?= htmlspecialchars($profile['username'] ?? '') ?></p>
                </div>

                <div class="information-item">
                    <label>Account Type</label>
                    <p><?= htmlspecialchars($profile['account_type'] ?? 'Resident') ?></p>
                </div>

            </div>
        </div>

    </section>

    <section class="request-status-section">

        <div class="request-status-heading">
            <div>
                <h2>My Request Status</h2>
                <p>Track the progress of your barangay requests.</p>
            </div>
        </div>

                <?php if (!empty($documentRequests)): ?>

                <?php foreach ($documentRequests as $request): ?>

                    <div class="request-card">
                        <h3>
                            <?= htmlspecialchars($request['document_type']) ?>
                        </h3>

                        <p>
                            Request ID:
                            <?= htmlspecialchars($request['request_id']) ?>
                        </p>

                        <p>
                            Date Submitted:
                            <?= htmlspecialchars($request['date_submitted']) ?>
                        </p>

                        <p>
                            Status:
                            <?= htmlspecialchars($request['request_status']) ?>
                        </p>
                    </div>

                <?php endforeach; ?>

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
