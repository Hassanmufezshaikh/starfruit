<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
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
</body>
</html>

