<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="Description" content="Find here details of companies selling Fresh Vegetables in Bengaluru, Karnataka. Get latest info on Fresh Vegetables, suppliers, wholesale suppliers, retailers traders with Fresh Vegetables prices for buying.">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <title>Buy Fresh Vegetables in Bulk | Wholesale Vegetable Supplier in India – Star Fruits</title>
    <style>
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .product-card { transition: 0.3s; border-radius: 15px; overflow: hidden; background: white; }
        .product-card:hover { box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15); transform: scale(1.05); }
        .product-image { height: 250px; object-fit: cover; border-radius: 10px; }
        .btn-custom { background-color: #ff5722; color: white; border-radius: 25px; padding: 10px 20px; }
        .btn-custom:hover { background-color: #e64a19; }
        .filter-section { background: white; padding: 20px; border-radius: 10px; }
        .cart-icon { font-size: 20px; color: #ff5722; }
        .navbar { background: #ff5722; padding: 15px; }
        .navbar-brand { color: white; font-weight: bold; }
        .card { border-radius: 15px; overflow: hidden; transition: transform 0.3s ease-in-out; }
        .card:hover { transform: translateY(-5px); box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); }
        .card-title { font-size: 20px; font-weight: bold; }
        .carousel-item img { height: 500px; object-fit: cover; border-radius: 10px; }
        .container-fluid { padding: 50px; }
    </style>
</head>

<body>
    <?php require("partials/_nav.php"); ?>
    
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photos/vegetables.jpeg" class="image_mobile img-fluid w-100  d-md-none d-lg-none" height="" alt="">
                <img src="photos/vegetables.jpeg" class="image_desktop w-100 d-none d-sm-block  " alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php 
            $products = [
                ["name" => "Onion", "image" => "photos/onion.jpeg", "Onion" => "Fresh Wholesale Onion Supplier in India – Star Fruits"],
                ["name" => "Tomato", "image" => "photos/tomato.jpg", "Tomato" => "Bulk Tomato Distributor – Farm Fresh Tomatoes for Trade"],
                ["name" => "Carrot", "image" => "photos/carrot.jpeg", "Carrot" => "High Quality Carrots – Wholesale Vegetable Exporter"],
                ["name" => "Red Chili", "image" => "photos/red-chilli.jpg", "Red Chili" => "Spicy Red Chili Wholesale Supplier – Indian Export Grade"],
                ["name" => "Potato", "image" => "photos/potato.jpeg", "Potato" => "Cleaned Bulk Potatoes for Food Businesses – India Seller"],
                ["name" => "Ginger", "image" => "photos/ginger.png", "Ginger" => "Fresh Ginger Root – Bulk Supplier for Factories & Exporters"],
                ["name" => "Garlic", "image" => "photos/garlic.jpg", "Garlic" => "Wholesale Garlic Bulbs – Star Fruits Vegetable Exporter"],
                ["name" => "Lemon", "image" => "photos/lemon.jpeg", "Lemon" => "Juicy Lemons in Bulk – Trusted Indian Wholesale Distributor"],
            ];
            foreach ($products as $product) {
            ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card product-card">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top product-image" alt="<?php echo $product['name']; ?>">
                    <div class="card-body text-center">
                        <h2 class="card-title"><?php echo $product['name']; ?></h2>
                        <!-- <button class="btn btn-custom">Add to Cart</button> -->
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    
    <?php include("partials/_footers.php"); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
