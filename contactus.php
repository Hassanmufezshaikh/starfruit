<?php
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <?php include("partials/_nav.php"); ?>

    <div class="container mt-4">
        <?php if ($showAlert) echo '<div class="alert alert-success">Form submitted successfully!</div>'; ?>
        <?php if ($showError) echo '<div class="alert alert-danger">' . $showError . '</div>'; ?>
        
        <h2 class="text-center">Enquire Now</h2>
        <p class="text-center">Fill in the form for more information.</p>
        <form action="contactus.php" method="post" class="p-4 border rounded bg-light">
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
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <?php include("partials/_footers.php"); ?>
</body>
</html>
