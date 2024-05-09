<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these with your actual handling code
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // Process your form (e.g., send email, save to a database)
}

require 'Includes/header.php'; ?>

    <div class="content-wrapper">
    <div class="contact-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>CONTACT WITH ME</h1>
            <p>If you have any questions or concerns, please don't hesitate to contact me. I am open to any work opportunities that align with my skills and interests.</p>
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <!-- ReCAPTCHA Placeholder -->
            <div class="recaptcha">[ReCAPTCHA widget here]</div>

            <button type="submit">SEND MESSAGE</button>
        </form>
    </div>

    <!-- Contact information with icons -->
    <div class="contact-info">
                <p><img src="/Img/email.svg" alt="Email" class="icon"> TeddyKpoto@gmail.com</p>
                <p><img src="/Img/phone.svg" alt="Phone" class="icon"> 763-291-7935</p>
                <p><img src="/Img/location.svg" alt="Address" class="icon"> 3501 Xenium Ln N, Plymouth, MN, 55441</p>
            </div>
        </div>



    
