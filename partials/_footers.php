<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ... other head elements ... -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



  <style>
    .custom-instagram-link {
      color: #16dffa;
      /* Replace with your desired color code */
    }

    .custom-instagram-link:hover {
      color: #16dffa;
      /* Change the color for hover state if needed */
    }




    #tt {
      text-align: center;
      /* margin-left: 400px; */
    }

    /* For mobile view */
    @media (max-width: 767.98px) {
      .custom-text-mobile {
        /* color: tomato;  Change this to your desired text color */
        font-size: 16px;
        /* Adjust the font size for mobile view */
      }
    }

    /* For desktop view */
    @media (min-width: 768px) {
      .custom-text-desktop {
        /* color: tomato;  Change this to your desired text color */
        font-size: 30px;
        /* Adjust the font size for desktop view */
      }
    }

    #footer {
      width: 80%;
      /* You can adjust the width as needed */
      margin-left: auto;
      margin-right: auto;
      display: flex;
      justify-content: center;
      /* Horizontal centering */
      align-items: center;
      /* Vertical centering */
    }
  </style>

</head>

<body>


<div class="container-fluid bg-light text-center mt-5">
  <h1 class="display-5 fw-bold text-info">🌟Star Fruits</h1>
  <p class="pb-1 text-center d-md-none d-lg-none"><b>Premier Wholesale Fruits and Vegetables Supplier</b></p>
  <p class="pb-1 text-center d-none d-md-block"><b>Premier Wholesale Fruits and Vegetables Supplier</b></p>
</div>

<div class="text-center" id="footer">
  <footer class="container py-5">
    <div class="row mb-5">
      <div class="col-lg-2 col-sm-6 mb-3 text-center">
        <h5>About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">About</a></li>
          <li class="nav-item mb-2"><a href="fruits.php" class="nav-link p-0 text-muted">Fruits</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-sm-6 text-center">
        <h5>Phone</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="tel:+919448757147" class="nav-link p-0 text-muted">+919448757147</a></li>
          <li class="nav-item mb-2"><a href="tel:+919945029443" class="nav-link p-0 text-muted">+919945029443</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-sm-6 text-center">
        <h5>Social Media</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://www.instagram.com/starfruits07/" class="nav-link p-0 text-muted"><i class="fab fa-instagram pr-1"></i> StarFruits</a></li>
          <li class="nav-item mb-2"><a href="https://www.linkedin.com/company/star-fuits-vegetables/" class="nav-link p-0 text-muted"><i class="fab fa-linkedin pr-1"></i> StarFruits</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-sm-6 text-center">
        <h5>Address</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sirsi, Karnataka</a></li>
          <li class="nav-item mb-2"><a href="contactus.php" class="nav-link p-0 text-muted">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-lg-3 text-center d-none d-sm-block">
        <h5>Email</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="mailto:starfruits66@gmail.com" class="nav-link p-0 text-muted">starfruits66@gmail.com</a></li>
          <li class="nav-item mb-2"><a href="mailto:starfruits99@gmail.com" class="nav-link p-0 text-muted">starfruits99@gmail.com</a></li>
        </ul>
      </div>
    </div>

    <div class="container text-center text-lg-start py-4">
      <div class="row align-items-center">
        <div class="col-lg-10 col-md-9 col-12 mb-3 mb-lg-0">
        <p class="mb-0 display-6 fw-bold text-info">&copy; <span id="year"></span> 🌟Star Fruits Company, Inc.</p>
        </div>
        <div class="col-lg-2 col-md-3 col-12 text-lg-end text-md-end text-center">
          <a href="#" class="text-info fw-bold">Back to top</a>
        </div>
      </div>
    </div>
  </footer>
</div>



<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>
</body>

</html>