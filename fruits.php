<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Fruit Wholesalers in india. Find ✓Fruit Suppliers, ✓Fruit Distributor, ✓Fruit Vendors, ✓Fresh Fruits Wholesalers in Bangalore. Get Phone Numbers, Address, Reviews, Photos, Maps for top Fruit Wholesalers near me in Bangalore.">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <title>Fresh Fruits Wholesale Supplier in India | Star Fruits Wholesalers</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .product-card {
            transition: 0.3s;
            border-radius: 15px;
            overflow: hidden;
            background: white;
        }

        .product-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transform: scale(1.05);
        }

        .product-image {
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #ff5722;
            color: white;
            border-radius: 25px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #e64a19;
        }

        .filter-section {
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        .cart-icon {
            font-size: 20px;
            color: #ff5722;
        }

        .navbar {
            background: #ff5722;
            padding: 15px;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
        }

        .carousel-item img {
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }

        .container-fluid {
            padding: 50px;
        }
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
                <img src="photos/fresh-fruits.jpg" class="image_mobile img-fluid w-100  d-md-none d-lg-none" height="" alt="">
                <img src="photos/fresh-fruits.jpg" class="image_desktop w-100 d-none d-sm-block  " alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php
            $products = [
                ["name" => "Pineapple", "image" => "photos/pineapple.jpg", "alt" => "Fresh Pineapple Wholesale Supplier India – Star Fruits"],
                ["name" => "Papaya", "image" => "photos/papaya.jpg", "alt" => "Bulk Papaya Distributor – Farm Fresh Papaya for Sale"],
                ["name" => "Tender Coconut", "image" => "photos/tendercocnut.jpg", "alt" => "Tender Coconut Wholesale Delivery – Star Fruits India"],
                ["name" => "Watermelon", "image" => "photos/watermelon.jpg", "alt" => "Juicy Watermelon in Bulk – Wholesale Supplier India"],
                ["name" => "Grapes", "image" => "photos/grapes.jpg", "alt" => "FresTop-Quality Pomegranates for Bulk Orders – India Distributor"],
                ["name" => "Muskmelon", "image" => "photos/muskleon.jpg", "alt" => "Sweet Muskmelon Supplier in India – Bulk Fruit Exporter"],
                ["name" => "Banana", "image" => "photos/banana.jpg", "alt" => "Fresh Bananas for Hotels and Traders – Star Fruits Supply"],
                ["name" => "Strawberry", "image" => "photos/strawberry.jpg", "alt" => "Organic Strawberries in Bulk – Indian Fruit Wholesaler"],
                ["name" => "Oranges", "image" => "photos/organes.jpg", "alt" => "Citrus Oranges Wholesale – Fresh Stock Supplier India"],
                ["name" => "Apple", "image" => "photos/apple.jpg", "alt" => "Crisp Red Apples for Bulk Sale – Star Fruits India"],
                ["name" => "Mango", "image" => "photos/mango.jpg", "alt" => "Export Quality Mangoes – Alphonso, Kesar in Bulk India"],
                ["name" => "arec-nuts", "image" => "photos/areca-nuts.png", "alt" => "Export Quality Areca Nuts – Bulk Supplier India"],

            ];
            foreach ($products as $product) {
            ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top product-image" alt="<?php echo $product['name']; ?>">
                        <div class="card-body text-center">
                            <h2 class="card-title"><?php echo $product['name']; ?></h2>
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