
<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

$requests = $_SESSION['clearance_requests'] ?? [];

$complaints = $_SESSION['complaint_requests'] ?? [];

$totalRequests = count($requests);
$pendingRequests = 0;
$approvedRequests = 0;
$rejectedRequests = 0;

foreach ($requests as $request) {
    $status = $request['request_status'] ?? 'Pending';

    if ($status === 'Pending') {
        $pendingRequests++;
    } elseif ($status === 'Approved') {
        $approvedRequests++;
    } elseif ($status === 'Rejected') {
        $rejectedRequests++;
    }
}
$totalComplaints = count($complaints);
$pendingComplaints = 0;
$approvedComplaints = 0;
$rejectedComplaints = 0;

foreach ($complaints as $complaint) {
    $status = $complaint['request_status'] ?? 'Pending';

    if ($status === 'Pending') {
        $pendingComplaints++;
    } elseif ($status === 'Approved') {
        $approvedComplaints++;
    } elseif ($status === 'Rejected') {
        $rejectedComplaints++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Barangay Requests | Admin Dashboard</title>

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
            <div class="avatar-circle">
                <i class="fa-solid fa-user-shield"></i>
            </div>

            <div class="sidebar-user-info">
                <h4>Admin User</h4>
                <p>Administrator</p>
            </div>
        </div>

        <div class="sidebar-menu-title">Navigation</div>

        <ul class="sidebar-menu">
            <li>
                <a href="admin_dashboard.php">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>
            </li>

            <li>
                <a href="clearance.php" class="active">
                    <i class="fa-solid fa-file-lines"></i> Documents
                </a>
            </li>

            <li>
                <a href="admin_announcements.php">
                    <i class="fa-solid fa-bullhorn"></i> Announcements
                </a>
            </li>

            <li>
                <a href="login.php">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </li>
        </ul>

    </aside>

    <div class="clearance-container">

        <header class="page-header">
            <div>
                <h1>Barangay Requests</h1>
            </div>
        </header>

        <main class="page-content">

            <section class="request-section">

                <div class="section-heading">
                    <div>
                        <h2>Clearance Requests</h2>
                        <p>List of submitted Barangay Clearance applications.</p>
                    </div>

                    <input type="search"
                           id="searchInput"
                           placeholder="Search resident...">
                </div>

                <div class="summary-cards">

                    <div class="summary-card">
                        <p>Total Requests</p>
                        <h2><?= $totalRequests ?></h2>
                    </div>

                    <div class="summary-card">
                        <p>Pending Requests</p>
                        <h2><?= $pendingRequests ?></h2>
                    </div>

                    <div class="summary-card">
                        <p>Approved Requests</p>
                        <h2><?= $approvedRequests ?></h2>
                    </div>

                    <div class="summary-card">
                        <p>Rejected Requests</p>
                        <h2><?= $rejectedRequests ?></h2>
                    </div>

                </div>

                <div class="table-container">

                    <table>
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Resident Name</th>
                                <th>Purpose</th>
                                <th>Date Submitted</th>
                                <th>Claiming Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php if (empty($requests)): ?>

                            <tr>
                                <td colspan="7" class="empty-message">
                                    No clearance requests found.
                                </td>
                            </tr>

                        <?php else: ?>

                            <?php foreach ($requests as $request): ?>

                                <tr>
                                    <td>
                                        <?= htmlspecialchars($request['request_id'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($request['fullname'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($request['purpose'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($request['date_submitted'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($request['claim_date'] ?? '') ?>
                                    </td>

                                    <td>
                                        <span class="status <?= strtolower($request['request_status'] ?? 'pending') ?>">
                                            <?= htmlspecialchars($request['request_status'] ?? 'Pending') ?>
                                        </span>
                                    </td>

                                    <td>
                                        <button type="button"
                                            class="view-button"
                                            onclick='showDetails(<?= json_encode($request, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP) ?>)'>
                                            View
                                        </button>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php endif; ?>

                        </tbody>
                    </table>

                </div>

            </section>

            <section class="request-section">

                <div class="section-heading">
                    <div>
                        <h2>Complaint Requests</h2>
                        <p>List of submitted Barangay Complaint applications.</p>
                    </div>

                    <input type="search"
                           id="complaintSearchInput"
                           placeholder="Search complainant...">
                </div>

                <div class="summary-cards">

                    <div class="summary-card">
                        <p>Total Complaints</p>
                        <h2><?= $totalComplaints ?></h2>
                    </div>

                    <div class="summary-card">
                        <p>Pending Complaints</p>
                        <h2><?= $pendingComplaints ?></h2>
                    </div>

                    <div class="summary-card">
                        <p>Approved Complaints</p>
                        <h2><?= $approvedComplaints ?></h2>
                    </div>

                    <div class="summary-card">
                        <p>Rejected Complaints</p>
                        <h2><?= $rejectedComplaints ?></h2>
                    </div>

                </div>


                <div class="table-container">

                    <table>
                        <thead>
                            <tr>
                                <th>Complaint ID</th>
                                <th>Complainant</th>
                                <th>Respondent</th>
                                <th>Complaint</th>
                                <th>Date Submitted</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php if (empty($complaints)): ?>

                            <tr>
                                <td colspan="7" class="empty-message">
                                    No complaint requests found.
                                </td>
                            </tr>

                        <?php else: ?>

                            <?php foreach ($complaints as $complaint): ?>

                                <tr>
                                    <td>
                                        <?= htmlspecialchars($complaint['request_id'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($complaint['fullname'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($complaint['respondent_name'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($complaint['complaint'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($complaint['date_submitted'] ?? '') ?>
                                    </td>

                                    <td>
                                        <span class="status <?= strtolower($complaint['request_status'] ?? 'pending') ?>">
                                            <?= htmlspecialchars($complaint['request_status'] ?? 'Pending') ?>
                                        </span>
                                    </td>

                                    <td>
                                        <button type="button"
                                            class="view-button"
                                            onclick='showComplaintDetails(<?= json_encode($complaint, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP) ?>)'>
                                            View
                                        </button>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php endif; ?>

                        </tbody>
                    </table>

                </div>

            </section>

        </main>
    </div>

    <div class="modal-overlay" id="detailsModal">

        <div class="modal-content">

            <button type="button" class="close-button"
                    onclick="closeDetails()">&times;</button>

            <h2>Clearance Request Details</h2>
            <p class="modal-subtitle">Resident application information</p>

            <div class="details-grid">

                <div><label>Request ID</label><p id="detailId"></p></div>
                <div><label>Full Name</label><p id="detailName"></p></div>
                <div><label>Date of Birth</label><p id="detailBirthdate"></p></div>
                <div><label>Sex</label><p id="detailSex"></p></div>
                <div><label>Civil Status</label><p id="detailCivilStatus"></p></div>
                <div><label>Contact Number</label><p id="detailContact"></p></div>
                <div class="full-width"><label>Complete Address</label><p id="detailAddress"></p></div>
                <div class="full-width"><label>Purpose</label><p id="detailPurpose"></p></div>
                <div><label>Claiming Date</label><p id="detailClaimDate"></p></div>
                <div><label>Date Submitted</label><p id="detailSubmitted"></p></div>

            </div>

            <div class="status-control">

                <label for="requestStatus">Request Status</label>

                <select id="requestStatus">
                    <option value="Pending">Pending</option>
                    <option value="Approved">Approved</option>
                    <option value="Rejected">Rejected</option>
                </select>

                <button type="button" class="save-button" onclick="saveStatus()">
                    Save Status
                </button>

            </div>

        </div>

    </div>

    <div class="modal-overlay" id="complaintModal">

        <div class="modal-content">

            <button type="button" class="close-button"
                    onclick="closeComplaintDetails()">&times;</button>

            <h2>Complaint Details</h2>
            <p class="modal-subtitle">Resident complaint information</p>

            <div class="details-grid">

                <div><label>Complaint ID</label><p id="complaintId"></p></div>
                <div><label>Complainant's Name</label><p id="complainantName"></p></div>
                <div><label>Contact Number</label><p id="complainantContact"></p></div>
                <div><label>Complete Address</label><p id="complainantAddress"></p></div>
                <div><label>Respondent's Name</label><p id="respondentName"></p></div>
                <div><label>Respondent's Address</label><p id="respondentAddress"></p></div>

                <div class="full-width">
                    <label>Complaint</label>
                    <p id="complaintText"></p>
                </div>

                <div><label>Date of Incident</label><p id="incidentDate"></p></div>
                <div><label>Time of Incident</label><p id="incidentTime"></p></div>
                <div><label>Location</label><p id="incidentLocation"></p></div>
                <div><label>Date Submitted</label><p id="complaintSubmitted"></p></div>

                <div class="full-width">
                    <label>Description of Incident</label>
                    <p id="incidentDescription"></p>
                </div>

            </div>

            <div class="status-control">

                <label for="complaintStatus">Request Status</label>

                <select id="complaintStatus">
                    <option value="Pending">Pending</option>
                    <option value="Approved">Approved</option>
                    <option value="Rejected">Rejected</option>
                </select>

                <button type="button" class="save-button"
                        onclick="saveComplaintStatus()">
                    Save Status
                </button>

            </div>

        </div>

    </div>


    <script src="clearance.js"></script>

</body>
</html>
