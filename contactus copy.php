<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("partials/_dbconnect.php");

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"]; // Corrected variable name to $_POST["emailaddress"]
    $message = $_POST["message"];

    if (!empty($name) && !empty($phone)) { // Ensure $email is not empty
        $exists = false;

        // Check if username already exists in the database
        $checkUsernameQuery = "SELECT * FROM `starfruits` WHERE `phone`='$phone'";
        $checkUsernameResult = mysqli_query($conn, $checkUsernameQuery);
        if (mysqli_num_rows($checkUsernameResult) > 0) {
            $exists = true;
            $showError = "Phone number already exists";
        } else {
            $sql = "INSERT INTO `starfruits` (`name`, `phone`, `email`, `message`) 
                    VALUES ('$name', '$phone', '$email', '$message')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            } else {
                $showError = "Form is not filled";
            }
        }
    } else {
        $showError = "Please fill all required fields"; // Add an error message if any required field is empty
    }
}
?>

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
        <strong>Success!</strong> you have filled the form sucessfully!!
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
<!-- style="background-color:hsla(182, 100%, 86%, 0.922);" -->
    <div class="container-fuild  " >
        <div class="jumbotron " >
            <div class="container">
                <h1 class="display-5 text-center ">Enquire Now</h1>
                <h1 class="lead text-left my-1"><b>If you have further information, Please fill in the below form.</b></h1>
                <br>
                <h3 class=" lead fs-3  text-left  mr-0 pr-0"> <b> At 🌟Star Fruits, our passion lies in sourcing the freshest and delicious fruits from across India. We deliver our premium produce to satisfied clients in Delhi, Punjab, and Hyderabad.</br></h3>
                <h3 class="text-center "> </h3>
                <div class="container ">
                    <form class="p-5 p-md-5 border rounded-5 bg-light" action="/starfruits/contactus.php" method="post">
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
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
    include("partials/_footers.php");
    ?>

</body>

</html>