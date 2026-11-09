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
                <h2>BARANGAY COMPLAINT</h2>
                <p>Complaint Form</p>

                <div class="form-group">
                    <h4>A. Complaint Information</h4>
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
                    <h4>B. Respondent's Information</h4>
                    <label for="name">Respondent's Full Name:</label>
                    <input type="text" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="address">Respondent's Address:</label>
                    <input type="text" id="address" name="address">
                </div>

                <div class="form-group">
                    <h4>C. Complaint Details</h4>
                    <label for="complaint">Complaint:</label>
                    <input type="text" id="complaint" name="complaint">
                </div>

                <div class="form-group">
                    <label for="date">Date of incident:</label>
                    <input type="date" id="c-date" name="date">
                </div>

                <div class="form-group">
                    <label for="time">Time of incident:</label>
                    <input type="time" id="time" name="time">
                </div>

                <div class="form-group">
                    <label for="location">Location of incident:</label>
                    <input type="text" id="location" name="location">
                </div>

                <div class="form-group">
                    <label for="description">Description of incident:</label>
                    <input type="text" id="description" name="description">
                </div>
                </div>

                <button class="submit-button">Submit</button>
                </form>
                </div>     
    </section>
</body>
</html>