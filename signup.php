<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="login-body">

    <div class="signup-container">

        <div class="log-header">
            <img src="logo.png" alt="Barangay Logo">
            <h1>Barangay Pag-asa</h1>
            <p>Resident Portal</p>
        </div>

        <div class="signup-content">

            <h2>Create Your Account</h2>
            <p>Register to access barangay services.</p>

            <form action="signup_process.php" method="POST">

                <h3><i class="fas fa-user"></i> Personal Information</h3>

                <div class="signup-grid">

                    <div class="log-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name"
                               placeholder="Enter full name" required>
                    </div>

                    <div class="log-group">
                        <label>Date of Birth</label>
                        <input type="date" name="birth_date" required>
                    </div>

                    <div class="log-group">
                        <label>Sex</label>
                        <select name="sex" required>
                            <option value="">Select sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="log-group">
                        <label>Civil Status</label>
                        <select name="civil_status" required>
                            <option value="">Select civil status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                        </select>
                    </div>

                    <div class="log-group">
                        <label>Occupation</label>
                        <input type="text" name="occupation"
                               placeholder="Enter occupation">
                    </div>

                    <div class="log-group">
                        <label>Complete Address</label>
                        <input type="text" name="complete_address"
                               placeholder="Enter complete address" required>
                    </div>

                </div>

                <h3><i class="fas fa-address-book"></i> Contact Information</h3>

                <div class="signup-grid">

                    <div class="log-group">
                        <label>Mobile Number</label>
                        <input type="tel" name="mobile_number"
                               placeholder="Enter mobile number" required>
                    </div>

                    <div class="log-group">
                        <label>Email Address</label>
                        <input type="email" name="email"
                               placeholder="Enter email address" required>
                    </div>

                    <div class="log-group">
                        <label>Emergency Contact Name</label>
                        <input type="text" name="emergency_contact_name"
                               placeholder="Enter contact name">
                    </div>

                    <div class="log-group">
                        <label>Emergency Contact Number</label>
                        <input type="tel" name="emergency_contact_number"
                               placeholder="Enter contact number">
                    </div>

                </div>

                <h3><i class="fas fa-home"></i> Household Information</h3>

                <div class="signup-grid">

                    <div class="log-group">
                        <label>Household Number</label>
                        <input type="text" name="household_number"
                               placeholder="Enter household number">
                    </div>

                    <div class="log-group">
                        <label>Family Head</label>
                        <input type="text" name="family_head"
                               placeholder="Enter family head">
                    </div>

                </div>

                <h3><i class="fas fa-lock"></i> Account Information</h3>

                <div class="signup-grid">

                    <div class="log-group">
                        <label>Username</label>
                        <input type="text" name="username"
                               placeholder="Create username" required>
                    </div>

                    <div class="log-group">
                        <label>Password</label>
                        <input type="password" name="password"
                               placeholder="Create password" required>
                    </div>

                    <div class="log-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password"
                               placeholder="Confirm password" required>
                    </div>

                </div>

                <button type="submit" class="log-button">
                    CREATE ACCOUNT
                </button>

            </form>

            <div class="log-footer">
                <p>Already have an account?
                    <a href="login.php">Log In</a>
                </p>
            </div>

        </div>
    </div>

</body>
</html>