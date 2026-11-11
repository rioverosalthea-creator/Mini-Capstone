<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <section id="contact">
        <div class="hero-contact">
            <h1>Contact Us</h1>
            <p>We're here to help. Get in touch with Barangay Pag-asa for any<br>
                questions, concerns, or assistance you may need.
            </p>
            <button class="btn6">
                <a class = "btntxt" href="#Email">Send Email</a>
            </button>
        </div>

        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>Multiple ways to reach us - choose the method that works best for you</p>

            <div class="contact-card">
                <div class="phone">
                    <h3>Phone</h3>
                    <p>Speak directly with our barangay staff.</p>
                    <h6></h6>
                    <p>Mon-Fri: 8:00 AM - 5:00 PM</p>
                </div>

                <div class="email">
                    <h3>Email</h3>
                    <p>Send us detailed inquiries, feedback, or non-urgent requests via email.</p>
                    <h6></h6>
                    <p>We respond within 24 hours</p>
                </div>

                <div class="loc">
                    <h3>Email</h3>
                    <p>Come to our office for in-person<br>
                     assistance and document processing.</p>
                    <h6>Barangay Central Hall</h6>
                    <p>Quezon Province</p>
                </div>
            </div>
        </div>

        <div class="contact-gform">
            <h1>Send Us a Message</h1>
            <p>Have a question, concern, or suggestion? We'd love to hear from you. Fill out the form<br>
                below and we'll get back to you.
            </p>
            <div class="form">
                <p><span style="color: red;">*</span> Indicates required field</p>
                <div>
                    <div>
                    <label for="firstName">First Name <span style="color: red;">*</span></label>
                    <input type="text" id="firstName" name="firstName" placeholder="Enter first name" maxlength="50" required>
                    <span>0/50 characters</span>
                    </div>
                    <div>
                    <label for="lastName">Last Name <span style="color: red;">*</span></label>
                    <input type="text" id="lastName" name="lastName" placeholder="Enter last name" maxlength="50" required>
                    <span>0/50 characters</span>
                    </div>
                </div>
                <div>
                    <div>
                    <label for="email">Email Address <span style="color: red;">*</span></label>
                    <input type="email" id="email" name="email" placeholder="example@email.com" required>
                    </div>
                    <div>
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="09XXXXXXXXX">
                    </div>
                </div>
                <div>
                    <label for="subject">Subject <span style="color: red;">*</span></label>
                    <select id="subject" name="subject" required>
                    <option value="" disabled selected>Select a subject</option>
                    <option value="general">General Inquiry</option>
                    <option value="support">Support</option>
                    </select>
                </div>
                <div>
                    <label for="message">Message <span style="color: red;">*</span></label>
                    <textarea id="message" name="message" rows="5" placeholder="Please describe your inquiry or concern in detail (minimum 10 characters)..." maxlength="1000" minlength="10" required></textarea>
                    <span>0/1000 characters</span>
                </div>
                <div>
                    <input type="checkbox" id="privacyAgreement" name="privacyAgreement" required>
                    <label for="privacyAgreement">I agree to the processing of my personal data in accordance with the <a href="#" target="_blank">Data Privacy Act of 2012</a>. <span style="color: red;">*</span></label>
                </div>
                <div>
                    <button type="submit">Send Message</button>
                </div>
            </div>
        </div>

    </section>
