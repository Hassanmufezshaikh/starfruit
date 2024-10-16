
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Us</title>

    <style>
        .container-fluid {
        padding-top: 0;
        padding-bottom: 0;
        margin-top: 0;
        margin-bottom: 0;
        
        }
        .jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 0rem;
    background-color: #e9ecef;
    border-radius: 0.3rem;
    }
    .mt-5, .my-5 {
        margin-top: 0rem!important;
    }
    .custom-text {
    color: tomato; /* Change this to your desiinfo text color */
    font-weight: bold;
    padding-left: 1rem;
    
  }


     .img-large {
        height: 600px; /* Set the fixed height for large screens */
        width: 900px;
        object-fit: cover; /* Maintain aspect ratio and cover the container */
    } 




    </style>

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

     <!-- graph -->
     <div class="container my-5"></div>
     <div class="container">
      <div class="row align-items-center g-lg-5 py-2">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-5 bold text-center  mb-3 mr-2">Contact Us</h1>
            <p class="col-lg-10 fs-3 text-left pl-5 mx-0">Welcome to Star Fruits, your go-to destination for the freshest and most delightful fruits sourced from all corners of India! Our passion is reflected in every bite, ensuring you experience the true essence of nature's goodness.

<br>
<br>At Star Fruits, quality and taste are our top priorities. Whether you're a fruit enthusiast or a buyer, our carefully curated selection promises a memorable experience. From the vibrant orchards of Delhi and Punjab to the lush groves of Kerala and the bustling markets of Mumbai and Hyderabad, we bring the best of India's harvest to your table.

Got a question or craving some fresh fruits? <br>Look no further! Fill out our convenient form below, and our dedicated team will be in touch with you shortly. We believe in making your fruit shopping experience seamless and enjoyable.
<br>
<br><b>Premium Quality: We source only the finest fruits for your satisfaction.</b>
<br><b>Fast and Reliable Service: We deliver promptly to your doorstep.</b>
<br><b>Passionate Team: Our experts are here to answer queries and provide assistance.</b>
</p>



        </div>
        
        <div class="col-md-10 mx-auto col-lg-5" id="down">
          <form class="p-5 p-md-5 border rounded-5 bg-light" action="/starfruits/" method="post">

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
        

          </form>
        </div>
        
      </div>
    </div>

         <div class="container my-5"></div>


    <?php
    include("partials/_footers.php");
    ?>

</body>

</html>