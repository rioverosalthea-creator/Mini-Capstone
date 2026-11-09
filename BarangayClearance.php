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
                <h2>BARANGAY CLEARANCE</h2>
                <p>Request Clearance Form</p>
                <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="fullname" id="fullname" name="fullname" placeholder="Enter your full name">

                <label for="birthday">Date of Birth</label>
                <input type="date" id="date" name="birthdate">
                </div>
               
                <div class="form-group2">
                <label for="sex">Sex:</label>
                    <select name="sex" id="sex" required>
                        <option value="" disabled selected>Select Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                
                <div class="form-group2">
                <label for="status">Civil Status</label>
                    <select name="status" id="status" required>
                        <option value="" disabled selected>Civil Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="contact number">Contact Number:</label>
                    <input type="text" id="contact-number" name="contact-number">

                </div>

                <div class="form-group">
                    <label for="address">Complete Address:</label>
                    <input type="text" id="address" name="address">
                </div>

                <div class="form-group">
                    <label for="purpose">Purpose of Request:</label>
                    <input type="text" id="purpose" name="purpose">
                </div>

                <div class="form-group">
                    <label for="date">Preferred Claiming Date:</label>
                    <input type="date" id="date" name="date">
                </div>

                <button class="submit-button">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>