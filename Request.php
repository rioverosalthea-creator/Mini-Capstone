<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Capstone</title>
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
            <form class="lay-out">
                <h2>BARANGAY REQUEST</h2>
                <p>Request Form</p>

                <div class="form-group">
                    <h4>A. Personal Information</h4>
                <label for="fullname">Full Name</label>
                <input type="fullname" id="fullname" name="fullname" placeholder="Enter your full name">

                <div class="form-group">
                <label for="contact number">Contact Number:</label>
                <input type="text" id="contact-number" name="contact-number">
                </div>

                <div class="form-group">
                <label for="address">Complete Address:</label>
                <input type="text" id="address" name="address">
                </div>

                <div class="form-group">
                    <h4>B. Request Details</h4>
                <label for="status">Type of Request</label>
                    <select name="type" id="type" required>
                        <option value="" disabled selected>Type of Request</option>
                        <option value="Road">Road Repair</option>
                        <option value="Streetlight">Streetlight Repair</option>
                        <option value="Garbage">Garbage Collection</option>
                        <option value="Drainage">Drainage Cleaning</option>
                        <option value="Tree">Tree Trimming</option>
                        <option value="Water">Water Supply Concern</option>
                        <option value="Public">Public Facility Repair</option>
                        <option value="Facility">Barangay Facility Reservation</option>
                        <option value="Community">Community Assistance</option>
                        <option value="Other">Others</option>
                    </select>

                        <div id="other" style="display: none;">
                        <label>Specify Certificate</label>
                        <input type="text" id="others" placeholder="Enter type of request">
                        </div>
                </div>

                <div class="form-group">
                <label for="address">Location of concern:</label>
                <input type="text" id="address" name="address">
                </div>

                <div class="form-group">
                <label for="reason">Reason for Request:</label>
                <input type="text" id="reason" name="reason">
                </div>

                <button class="submit-button">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>