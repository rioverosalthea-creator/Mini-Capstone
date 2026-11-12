
<?php
session_start();

if (
    !isset($_SESSION['profile']) ||
    !isset($_SESSION['role']) ||
    $_SESSION['role'] !== 'resident'
) {
    header("Location: login.php");
    exit();
}

$profile = $_SESSION['profile'];

$notifications = $profile['notifications'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<main class="settings-page">

    <div class="settings-page-header">

        <div class="settings-heading">
            <h1>
                <i class="fas fa-user-cog"></i>
                Account Settings
            </h1>
            <p>Manage your account preferences and security.</p>
        </div>

        <div class="profile-breadcrumb">
            <a href="index.php">Home</a>
            <span>/</span>
            <span class="current-page">Account Settings</span>
        </div>

    </div>

    <section class="settings-card">

        <div class="settings-card-heading">
            <div class="settings-icon">
                <i class="fas fa-user-circle"></i>
            </div>

            <div>
                <h2>Account Details</h2>
                <p>Manage your account information.</p>
            </div>
        </div>

        <div class="settings-content">

            <div class="settings-field">
                <label>Username</label>
                <input type="text"
                    value="<?= htmlspecialchars($profile['username'] ?? '') ?>"
                    readonly>
            </div>

            <div class="settings-field">
                <label>Email Address</label>
                <input type="email"
                    value="<?= htmlspecialchars($profile['email'] ?? '') ?>"
                    readonly>
            </div>

            <div class="settings-field">
                <label>Account ID</label>
                <input type="text"
                    value="<?= htmlspecialchars($profile['resident_number'] ?? '') ?>"
                    readonly>
            </div>

            <div class="settings-field">
                <label>Account Status</label>
                <input type="text" value="Active" readonly>
            </div>

        </div>

        <p class="settings-note">
            <i class="fas fa-info-circle"></i>
            To change your personal information, visit your Profile page.
        </p>

    </section>

    <section class="settings-card">

        <div class="settings-card-heading">
            <div class="settings-icon">
                <i class="fas fa-lock"></i>
            </div>

            <div>
                <h2>Password & Security</h2>
                <p>Keep your account secure by updating your password.</p>
            </div>
        </div>

        <form action="change_password.php" method="POST">

            <div class="settings-password-fields">

                <div class="settings-field">
                    <label>Current Password</label>
                    <input type="password" name="current_password"
                        placeholder="Enter current password" required>
                </div>

                <div class="settings-field">
                    <label>New Password</label>
                    <input type="password" name="new_password"
                        placeholder="Enter new password" required>
                </div>

                <div class="settings-field">
                    <label>Confirm New Password</label>
                    <input type="password" name="confirm_password"
                        placeholder="Confirm new password" required>
                </div>

            </div>

            <button type="submit" class="settings-save-btn">
                <i class="fas fa-key"></i> Change Password
            </button>

        </form>

    </section>

    <section class="settings-card">

        <div class="settings-card-heading">
            <div class="settings-icon">
                <i class="fas fa-bell"></i>
            </div>

            <div>
                <h2>Notification Preferences</h2>
                <p>Choose which notifications you want to receive.</p>
            </div>
        </div>

        <form action="save_notifications.php" method="POST">

            <div class="notification-option">
                <div>
                    <h3>Email Notifications</h3>
                    <p>Receive updates through your email address.</p>
                </div>
                <label class="switch">
                    <input type="checkbox" name="email_notifications" value="1"
                    <?= !empty($notifications['email_notifications']) ? 'checked' : '' ?>>
                    <span class="slider"></span>
                </label>
            </div>

            <div class="notification-option">
                <div>
                    <h3>SMS Notifications</h3>
                    <p>Receive updates through your mobile number.</p>
                </div>
                <label class="switch">
                    <input type="checkbox" name="email_notifications" value="1"
                    <?= !empty($notifications['email_notifications']) ? 'checked' : '' ?>>
                    <span class="slider"></span>
                </label>
            </div>

            <div class="notification-option">
                <div>
                    <h3>Announcement Notifications</h3>
                    <p>Get notified about barangay announcements.</p>
                </div>
                <label class="switch">
                    <input type="checkbox" name="announcement_notifications" value="1"
                    <?= !empty($notifications['announcement_notifications']) ? 'checked' : '' ?>>
                    <span class="slider"></span>
                </label>
            </div>

            <div class="notification-option">
                <div>
                    <h3>Request Status Updates</h3>
                    <p>Receive updates about your submitted requests.</p>
                </div>
                <label class="switch">
                    <input type="checkbox" name="request_notifications" value="1"
                    <?= !empty($notifications['request_notifications']) ? 'checked' : '' ?>>
                    <span class="slider"></span>
                </label>
            </div>

            <button type="submit" class="settings-save-btn">
                <i class="fas fa-save"></i> Save Preferences
            </button>

        </form>

    </section>

    <section class="settings-card">

        <div class="settings-card-heading">
            <div class="settings-icon">
                <i class="fas fa-user-cog"></i>
            </div>

            <div>
                <h2>Account Actions</h2>
                <p>Manage your account access.</p>
            </div>
        </div>

        <div class="account-action">
            <div>
                <h3>Log Out</h3>
                <p>Sign out of your Barangay Pag-asa account.</p>
            </div>

            <a href="login.php" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Log Out
            </a>
        </div>

        <div class="account-action delete-action">
    <div>
        <h3>Delete Account</h3>
        <p>Permanently remove your account and associated information.</p>
    </div>

    <form action="delete_account.php" method="POST"
        onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">

        <button type="submit" class="delete-account-btn">
            <i class="fas fa-trash-alt"></i> Delete Account
        </button>

    </form>
</div>

    </section>

</main>

</body>
</html>
