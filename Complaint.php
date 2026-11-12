<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Complaint</title>
    <link rel="stylesheet" href="style.css?v=1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    
    <section id="Home-BC">
        <div class="home-BC">
            <img src="pitogobg.jpg" alt="BarangayBg" class="bg-image-BC">

    </section>

    <section id="">
        <div class="form-layout">
            <form class="lay-out" action="submit_complaint.php" method="POST">
                <h2>BARANGAY COMPLAINT</h2>
                <p>Complaint Form</p>

                <div class="form-group">
                    <h4>A. Complaint Information</h4>

                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" required>

                    <label for="contact_number">Contact Number:</label>
                    <input type="tel" id="contact_number" name="contact_number" required>

                    <label for="address">Complete Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <h4>B. Respondent's Information</h4>

                    <label for="respondent_name">Respondent's Full Name:</label>
                    <input type="text" id="respondent_name" name="respondent_name" required>

                    <label for="respondent_address">Respondent's Address:</label>
                    <input type="text" id="respondent_address" name="respondent_address" required>
                </div>

                <div class="form-group">
                    <h4>C. Complaint Details</h4>

                    <label for="complaint">Complaint:</label>
                    <input type="text" id="complaint" name="complaint" required>

                    <label for="incident_date">Date of Incident:</label>
                    <input type="date" id="incident_date" name="incident_date" required>

                    <label for="incident_time">Time of Incident:</label>
                    <input type="time" id="incident_time" name="incident_time" required>

                    <label for="location">Location of Incident:</label>
                    <input type="text" id="location" name="location" required>

                    <label for="description">Description of Incident:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>

                <button type="submit" class="submit-button">Submit</button>  
    </section>

</body>
</html>