<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Fruits Footer</title>

    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* Unique Footer Styling */
        .sf-footer {
            background: linear-gradient(to right, #f8f9fa, #e9ecef, #dee2e6);
            /* Light Pastel Theme */
            color: #333;
            padding: 50px 0;
            font-size: 16px;
        }

        .sf-footer h5 {
            color: #ff5722;
            /* Green theme */
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .sf-footer ul {
            list-style: none;
            padding: 0;
        }

        .sf-footer ul li {
            margin-bottom: 10px;
        }

        .sf-footer ul li a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .sf-footer ul li a:hover {
            color: #ff5722;
            text-decoration: underline;
        }

        /* Social Icons */
        .sf-social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            margin-right: 10px;
            border-radius: 50%;
            background: rgba(0, 128, 0, 0.1);
            color: #ff5722;
            transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .sf-social-icons a:hover {
            background: #ff5722;
            color: #fff;
            transform: scale(1.1);
        }

        /* Footer Bottom */
        .sf-footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sf-footer {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- Footer Section -->
    <footer class="sf-footer">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-lg-3 col-md-6">
                    <h5>About</h5>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="fruits.php">Fruits</a></li>
                        <li><a href="vegetables.php">Vegetables</a></li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="col-lg-3 col-md-6">
                    <h5>Contact</h5>
                    <ul>
                        <li><a href="tel:+919448757147">+91 9448757147</a></li>
                        <li><a href="tel:+919945029443">+91 9945029443</a></li>
                        <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=starfruitar@gmail.com" target="_blank">Email Us</a></li>
                    </ul>
                </div>

                <!-- Social Media Section -->
                <div class="col-lg-3 col-md-6">
                    <h5>Follow Us</h5>
                    <div class="sf-social-icons">
                        <a href="https://www.instagram.com/starfruits07/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/star-fuits-vegetables/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="col-lg-3 col-md-6">
                    <h5>Our Location</h5>
                    <ul>
                        <li>Sirsi, Karnataka</li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="sf-footer-bottom">
                <p>&copy; <span id="sf-year"></span> 🌟 Star Fruits Company, Inc. | All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Update Year Automatically
        document.getElementById("sf-year").textContent = new Date().getFullYear();
    </script>

</body>

</html>