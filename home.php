<?php
session_start();
$showAlert = false;
$showError = false;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $page = $_POST['page'];

  if (!empty($name) && !empty($phone)  && !empty($message)) { // Ensure $email is not empty
    $exists = false;



    //Load Composer's autoloader
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'hassanmufezshaikh@gmail.com';                     //SMTP username
      $mail->Password   = 'deesoqdqtlwacjwq';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('hassanmufezshaikh@gmail.com', 'contact form');
      $mail->addAddress('starfruitar@gmail.com', 'hamri website');     //Add a recipient


      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Star Fruits';
      $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> Sender Phone Number - $phone <br> Sender Message - $message";

      $mail->send();
      if ($page == "conatctus") {
        header("Location: contactus.php?showAlert=success");
        $_SESSION['success'] == "mail sent";
        exit();
      } else {
        $showAlert = true;
      }
    } catch (Exception $e) {
      $showError = "Form is not filled";
    }
  } else {
    $showError = "Please fill all required fields"; // Add an error message if any required field is empty
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <link rel="stylesheet" href="styles.css">
  <title>Starfruits</title>
</head>

<body>
  <?php
  require("partials/_nav.php");
  ?>


  <?php
  if ($showAlert) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Great job! 🎉 Your form has been submitted successfully, and we' . "'" . 've received your email. Thanks for reaching out! 😊
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
  }
  if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
  }
  ?>


  <style>
    .contact-section {
      background: linear-gradient(135deg, #f8f9fa, #ffffff);
    }

    .card {
      background: #ffffff;
      border-radius: 12px;
      padding: 20px;
    }

    /* Custom CSS to reduce the height of the jumbotron by 40% */
    .jumbotron {
      height: 60%;
      /* Reduce the height by 40% (100% - 40% = 60%) */
    }

    .custom-text {
      font-weight: bold;
      padding-left: 1rem;
    }

    /* For mobile view */
    @media (max-width: 767.98px) {
      .custom-text-mobiles {
        font-weight: bold;
        color: tomato;
        /* Change this to your desired text color */
        /* font-size: 90px; Adjust the font size for mobile view */
      }
    }

    /* For desktop view */
    @media (min-width: 768px) {
      .custom-text-desktops {
        font-weight: bold;
        color: tomato;
        /* Change this to your desired text color */
        /* font-size: 200px; Adjust the font size for desktop view */
      }
    }

    #sass {
      color: tomato;


    }

    #sas {
      color: tomato;

    }

    #sas1 {
      color: white;

    }

    #sas2 {
      color: white;

    }

    #sas3 {
      color: white;

    }

    /* @media (max-width: 100) {
    .image_mobile {

    }
} */

    /* For desktop view */
    .image_desktop {
      height: 600px;
      /* Set your desired fixed height */
    }

    .carousel-item img {
      object-fit: cover;
      height: 500px;
    }

    .custom-text {
      font-weight: bold;
      color: tomato;
    }

    .card {
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
    }

    
    body {
      margin: 0;
      padding: 0;
      background-color: #fff;
    }
    .top-bar {
      background-color: #a10039;
      height: 10px;
    }
    .main-section {
      background: linear-gradient(to bottom, #000000, #033333);
      color: yellow;
      padding: 40px 20px;
      text-align: center;
      font-family: Arial, sans-serif;
    }
    .main-section h2, .main-section h4, .main-section p {
      margin-bottom: 20px;
    }
    .contact-buttons .btn {
      font-size: 18px;
      font-weight: bold;
      padding: 10px 30px;
      margin: 10px;
      border-radius: 30px;
    }
    .call-btn {
      background-color: red;
      color: white;
    }
    .whatsapp-btn {
      background-color: green;
      color: white;
    }
    .bottom-strip {
      background-color: yellow;
      color: black;
      font-weight: bold;
      padding: 10px;
      text-align: center;
      border-top: 2px solid blue;
      border-bottom: 2px solid blue;
    }


.language-switch {
    margin: 20px auto;
}


.btn-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

@media (min-width: 768px) {
    .btn-group {
        flex-direction: row;
    }
}

/* Hide Google Translate toolbar elements */
.goog-te-banner-frame {
    display: none !important;
}

.goog-te-gadget {
    display: none !important;
}

.goog-te-gadget-simple {
    display: none !important;
}

.goog-te-combo {
    display: none !important;
}

.goog-te-gadget span {
    display: none !important;
}

.goog-logo-link {
    display: none !important;
}

  </style>
<!-- Carousel -->
<div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="photos/1.jpg" class="d-block w-100 d-md-none" alt="Mobile Image">
            <img src="photos/1.jpg" class="d-none d-md-block w-100" alt="Desktop Image">
        </div>
    </div>
</div>

<!-- Language Selector -->
<div class="language-switch text-center py-1">
    <button class="btn btn-primary btn-lg px-4 py-2" onclick="changeLanguage('en')">English</button>
    <button class="btn btn-warning btn-lg px-4 py-2" onclick="changeLanguage('hi')">हिन्दी</button>
</div>

<div class="text-center pb-3" id="google_translate_element"></div>

<!-- Overlay with CTA -->
<div class="content-overlay text-center" style="background-color:#ff5722; padding: 40px;">
    <div class="container py-4">
        <h1 class="custom-text display-3 text-white">Welcome To Star Fruits</h1>
        <p class="lead mt-3 text-light">Your Trusted Exporter of Fresh Fruits, Vegetables & Areca Nuts</p>

        <div class="banner mt-4">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="btn-group">
                        <button class="btn btn-danger btn-lg px-5 py-3" onclick="callNow()">✆ CALL NOW</button>
                        <button class="btn btn-success btn-lg px-5 py-3" onclick="whatsapp()">💬 WHATSAPP</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Modern Contact Section -->

  <section class="contact-section py-5">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
          <h1 class="display-4 fw-bold" style="color: #ff5722;">Contact Us</h1>
          <p class="fs-5 text-muted">
            Welcome to <span class="fw-bold text-dark">🌟Star Fruits</span>, your go-to destination for the freshest and most delightful fruits sourced from across India! Experience the true essence of nature's goodness with every bite.
          </p>
          <ul class="list-unstyled text-muted fs-6">
            <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Premium Quality:</strong> Finest handpicked fruits.</li>
            <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Fast Delivery:</strong> Prompt doorstep service.</li>
            <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Expert Assistance:</strong> Our team is here to help.</li>
          </ul>
        </div>
        <div class="col-lg-5">
          <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
              <h4 class="text-center mb-4" style="color: #ff5722;">Get in Touch</h4>
              <form action="/starfruits/" method="post">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" maxlength="20" required>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn w-100 py-2" style="background-color: #ff5722; border: none; color: white;">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  require("includes/abouts.php");
  ?>

  <?php
  require("includes/fruitss.php");
  ?>

  <?php
  require("includes/vegetabless.php");
  ?>
  
  <?php
  include("partials/_footers.php");
  ?>

  <!-- Bootstrap Icons & Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>



