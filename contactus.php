<?php
session_start();
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("partials/_dbconnect.php");

    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (!empty($name) && !empty($phone) && !empty($email)) {
        $checkQuery = "SELECT * FROM `starfruits` WHERE `phone`='$phone'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            $showError = "Phone number already exists";
        } else {
            $sql = "INSERT INTO `starfruits` (`name`, `phone`, `email`, `message`) VALUES ('$name', '$phone', '$email', '$message')";
            $result = mysqli_query($conn, $sql);
            $showAlert = $result ? true : "Form submission failed";
        }
    } else {
        $showError = "All fields are required";
    }
}

if (isset($_GET['showAlert'])) {
    if ($_GET['showAlert'] == "success")
        $showAlert = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="js/script.js"></script>
    <title>Contact Us</title>
</head>

<body>
    <?php include("partials/_nav.php"); ?>

    <div class="container mt-4 mb-5">
        <?php
        if ($showAlert) {
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Great job! 🎉 Your form has been submitted successfully, and we' . "'" . 've received your email. Thanks for reaching out! 😊
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
        }

        ?>
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto"> <!-- Adjust width for tablets & laptops -->
                <!-- <?php if ($showAlert) echo '<div class="alert alert-success">Form submitted successfully!</div>'; ?> -->
                <?php if ($showError) echo '<div class="alert alert-danger">' . $showError . '</div>'; ?>
                <?php //session_destroy(); 
                ?>

                <h2 class="text-center">Enquire Now</h2>
                <p class="text-center">Fill in the form for more information.</p>
                <p class="text-left p-2">
                    Welcome to <strong>Starfruits</strong> — your reliable partner in the wholesale supply of <strong>fresh fruits</strong>, <strong>vegetables</strong>, and <strong>areca nuts</strong>. We specialize in bulk delivery across India, ensuring top quality, timely service, and competitive pricing for retailers, distributors, and exporters.
                </p>


                <form action="/starfruits/index.php" method="post" class="p-4 border rounded bg-light">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">What do you want to buy?</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <input type="hidden" name="page" id="page" value="conatctus">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php include("partials/_footers.php"); ?>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <script>
            $(document).ready(function() {
                // Initialize Bootstrap tooltips
               $('.close').on('click', function(e) {
                    $('.alert').hide();
                    location.reload();
                // alert("Alert closed");
                });

            });
        </script>
    </body>

</html>