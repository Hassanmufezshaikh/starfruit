<?php
// php form to send contact address

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hassanmufezshaikh@gmail.com';
    $mail->Password = 'Hassan@00';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('hassanmufezshaikh@gmail.com');

    $mail->addAddress($_POST['email']);

    $mail->isHtml(true);
    $mail->name = $_POST['name'];
    $mail->phone = $_POST['phone'];

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];



    $messag1 = "Your Message is Submitted sucessfully | 🌟Star Fruits";
    $messag2 = "Client name: " . $name . " wrote the following message" . "\n\n" . $_POST['message'];
    $messag3 = "Dear " . $name . "\n\n" . "thank you for Contacting Us! We'll Get back to you Shortly";

    $result = mail($mailto, $name, $email, $phone, $message);

    if ($result) {
        echo '<script type="text/javascript">alert("Message Was Sent Sucessfully, We Will contact you shortly") </script>';
    } else {
        echo '<script type="text/javascript">alert("failed to submit!!") </script>';
    }
}


?>


<div class="container">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-5 bold text-center pr-5 mb-3 mr-5">Contact Us</h1>
            <p class="col-lg-10 fs-1 text-left pl-5 mx-0">At 🌟Star Fruits, we are passionate about bringing you the freshest and most delicious fruits from around the India. Our commitment to quality and taste ensures that every bite is a delightful experience. Whether you're a fruit enthusiast or Buyer,
                we've got something special for you.
                <br>Have a question or want to place an order? Fill out the form below,
                and we'll get in touch with you shortly.
            </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-5 p-md-5 border rounded-5 bg-light" action="/starfruits/vegetables.php" method="post">
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
            </form>
        </div>
    </div>
</div>