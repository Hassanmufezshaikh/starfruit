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

    <title>Starfruits</title>
    <style>             .custom-text {
    color: tomato; /* Change this to your desiinfo text color */
    font-weight: bold;
    padding-left: 1rem;
    
  }</style>
</head>

<body>
<?php
  require("partials/_nav.php"); 
  ?>
    <!-- carosel -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photos/pin19.jpeg" class="d-block w-100" class="img-fluid"  alt="..." />
            </div>
        </div>
</div>

<!-- cards starts from here  -->
<div class="container-fuild py-5 px-5 col-lg" >

    <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="photos/pin21.jpeg"  width="350" height="400" class="card-img-top " alt="Image 1">
                    <div class="card-body mt-3">
                        <h2 class="card-title text-center  custom-text">Onion</h2>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="photos/pin22.jpg"  width="350" height="400" class="card-img-top " alt="Image 1">
                    <div class="card-body mt-3">
                        <h2 class="card-title text-center  custom-text">Tomato</h2>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="photos/pin23.jpeg " width="350" height="400" class="card-img-top" alt="Image 1">
                    <div class="card-body mt-3">
                        <h2 class="card-title text-center  custom-text">Carrot</h2>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="photos/pin24.jpg" width="350" height="400" class="card-img-top" alt="Image 1">
                    <div class="card-body mt-3">
                        <h2 class="card-title text-center  custom-text">Red Chili</h2>
                        
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="photos/pin25.jpeg"  width="350" height="400" class="card-img-top " alt="Image 1">
                    <div class="card-body mt-3">
                        <h2 class="card-title text-center  custom-text">Potato</h2>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="photos/pin26.png"  width="350" height="400" class="card-img-top " alt="Image 1">
                    <div class="card-body mt-3">
                        <h2 class="card-title text-center  custom-text">Ginger</h2>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="Photos/28.jpg " width="350" height="400" class="card-img-top" alt="Image 1">
                    <div class="card-body mt-3">
                        <h2 class="card-title text-center  custom-text">Garlic</h2>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="photos/pin30.jpeg" width="350" height="400" class="card-img-top" alt="Image 1">
                    <div class="card-body mt-3">
                        <h2 class="card-title text-center  custom-text">Lemon</h2>
                        
                    </div>
                </div>
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