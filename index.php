<?php
$showAlert = false;
$showError = false;

        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];
    $message =$_POST['message'];

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
            $mail->Subject = '🌟Star Fruits';
            $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> Sender Phone Number - $phone <br> Sender Message - $message";

            $mail->send();
            
            $showAlert = true;
        } catch (Exception $e) {
          $showError = "Form is not filled";
        }

      }
      else {
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
        <strong>Success!</strong> Great job! 🎉 Your form has been submitted successfully, and we'."'".'ve received your email. Thanks for reaching out! 😊
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
        color: tomato; /* Change this to your desired text color */
        /* font-size: 90px; Adjust the font size for mobile view */
    }
}

/* For desktop view */
@media (min-width: 768px) {
    .custom-text-desktops {
      font-weight: bold;
        color: tomato; /* Change this to your desired text color */
        /* font-size: 200px; Adjust the font size for desktop view */
    }
}

#sass{
  color: tomato;


}
#sas{
  color: tomato;

}
#sas1{
  color: white;

}
#sas2{
  color: white;

}
#sas3{
  color: white;

}

/* @media (max-width: 100) {
    .image_mobile {

    }
} */

/* For desktop view */
.image_desktop {
    height: 600px; /* Set your desired fixed height */
}


  </style>

  <!-- carosel -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <img src="photos/01.avif" class="d-block w-100" class="img-fluid" height="600px"  alt="..." />width="800" height="450" -->
        <img src="photos/1.jpg" class="image_mobile img-fluid w-100  d-md-none d-lg-none" height="" alt="">
        <img src="photos/1.jpg" class="image_desktop w-100 d-none d-sm-block  "  alt="">


      </div>
    </div>
    <!-- carosel -->
    <!-- <h1 class="display-3 text-center"><b>Welcome To Star Fruits</b></h1> -->

    <div class="container py-1 " id="custom-cards">
      <div class="row">
          <div class="col-12 pb-1 text-center  custom-text-mobile d-md-none d-lg-none" style="font-size: 32px; font-weight: bold;  color: tomato; "><a href="#down" id="sas">Welcome To Star Fruits</a></div>
          <div class="col-12 pb-1 text-center  custom-text-desktops d-none d-sm-block" style="font-size: 60px; font-weight: bold;  color: tomato; "><a href="#down" id="sass">Welcome To Star Fruits</a></div>
      </div>

      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 ">
        <div class="col my-3">
        <a href="#down" id="sas1">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
            style="background-image: url('photos/pin33.jpeg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Juicy Tropical Pineapples</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <a href="about.php">
                      <img src="photos/pin50.png" alt="Bootstrap" width="50" height="50" class="rounded-circle border border-white">
                  </a>
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#geo-fill"></use>
                  </svg>
                  <!-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><a class="text-white" href="about.php">ABOUT</a></button> -->
                  <a class="btn btn-outline-light my-2 my-sm-0 text-white" href="about.php">ABOUT</a>

                  <!-- <h3><a class="text-white" href="about.php">About</a></h3> -->
                </li>
              </ul>
            </div>
          </div>
          
        </a>
        </div>

        <div class="col  my-3">
        <a href="#down" id="sas2">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
            style="background-image: url('photos/pin35.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Tropical Fruit Market Online</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                <a href="fruits.php">
                    <img src="photos/pin50.png" alt="Bootstrap" width="50" height="50" class="rounded-circle border border-white">
                </a>
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#geo-fill"></use>
                  </svg>
                  <!-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><a class="text-white" href="fruits.php">FRUITS</a></button> -->

                  <a class="btn btn-outline-light my-2 my-sm-0 text-white" href="fruits.php">FRUITS</a>

                  <!-- <h3><a class="text-white" href="fruits.php">Fruits</a></h3> -->
                </li>

              </ul>
            </div>
          </div>
        </a>
        </div>

        <div class="col my-3">
        <a href="#down" id="sas3">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
            style="background-image: url('photos/pin7.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Farm Fresh Fruit Selection</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                <a href="contactus.php">
                    <img src="photos/pin50.png" alt="Bootstrap" width="50" height="50" class="rounded-circle border border-white">
                </a>
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#geo-fill"></use>
                  </svg>
                  <!-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><a class="text-white"  href="contactus.php">CONTACT</a></button> -->

                  <a class="btn btn-outline-light my-2 my-sm-0 text-white" href="contactus.php">CONTACT</a>


                  <!-- <h3><a class="text-white" href="contactus.php">Contact Us</a></h3> -->
                </li>
              </ul>
            </div>
          
          </div>
        </a>
        </div>
      </div>
    </div>
  </div>
    <!-- graph -->
    <?php
  require("includes/abouts.php");
  ?>

<?php
  require("includes/fruitss.php");
  ?>

<?php
  require("includes/vegetabless.php");
  ?>



    <!-- graph -->

    <div class="container">
      <div class="row align-items-center g-lg-5 py-2">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-5 bold text-center  mb-3 mr-2">Contact Us</h1>
            <p class="col-lg-10 fs-3 text-left pl-5 mx-0">Welcome to 🌟Star Fruits, your go-to destination for the freshest and most delightful fruits sourced from all corners of India! Our passion is reflected in every bite, ensuring you experience the true essence of nature's goodness.

<br>
<br>At 🌟Star Fruits, quality and taste are our top priorities. Whether you're a fruit enthusiast or a buyer, our carefully curated selection promises a memorable experience. From the vibrant orchards of Delhi and Punjab to the lush groves of Kerala and the bustling markets of Mumbai and Hyderabad, we bring the best of India's harvest to your table.

Got a question or craving some fresh fruits? <br>Look no further! Fill out our convenient form below, and our dedicated team will be in touch with you shortly. We believe in making your fruit shopping experience seamless and enjoyable.
<br>
<br><b>Premium Quality: We source only the finest fruits for your satisfaction.</b>
<br><b>Fast and Reliable Service: We deliver promptly to your doorstep.</b>
<br><b>Passionate Team: Our experts are here to answer queries and provide assistance.</b>
</p>



        </div>
        
        <div class="col-md-10 mx-auto col-lg-5" id="down">
          <form class="p-5 p-md-5 border rounded-5 bg-light" action="/starfruits/index.php" method="post">
                      <div class="form-group">
                            <label for="name">NAME</label>
                            <input type="text" maxlength="20" class="form-control" id="name" name="name"
                                aria-describedby="emailHelp">
                       </div>
                        <div class="form-group">
                            <label for="phone">PHONE</label>
                            <input type="phone" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">EMAIL</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">MESSAGE</label>
                            <textarea type="message" class="form-control" id="message" name="message"
                                rows="5"></textarea>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        
            <!-- <div class="checkbox mb-3">
           <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label> 
          </div> -->
          
            <!-- <button class="w-100 btn btn-lg btn-primary" type="submit" fdprocessedid="sajgfu">SUBMIT</button> -->
            <!-- <hr class="my-4"> -->
            <!-- <small class="text-muted">By clicking Submit, your details will be stored.</small> -->
          </form>
        </div>
        
      </div>
    </div>

    <?php
    include("partials/_footers.php");
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
</body>

</html>