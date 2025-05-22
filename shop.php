<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Fruits & Vegetables</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .product-card { transition: 0.3s; border-radius: 15px; overflow: hidden; background: white; }
        .product-card:hover { box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15); transform: scale(1.05); }
        .product-image { height: 200px; object-fit: cover; border-radius: 10px; }
        .btn-custom { background-color: #ff5722; color: white; border-radius: 25px; padding: 10px 20px; }
        .btn-custom:hover { background-color: #ff5722; }
        .filter-section { background: white; padding: 20px; border-radius: 10px; }
        .cart-icon { font-size: 20px; color: #ff5722; }
        .navbar { background: #ff5722; padding: 15px; }
        .navbar-brand { color: white; font-weight: bold; }
    </style>
</head>
<body>
<?php
  require("partials/_nav.php"); 
  ?>
    <div class="container py-5">
        <h2 class="text-center mb-4">Shop Fresh Fruits & Vegetables</h2>
        <div class="row">
            <div class="col-md-3 filter-section">
                <input type="text" class="form-control mb-3" placeholder="Search...">
                <select class="form-select mb-3">
                    <option selected>Filter by Category</option>
                    <option value="fruits">Fruits</option>
                    <option value="vegetables">Vegetables</option>
                </select>
                <select class="form-select mb-3">
                    <option selected>Sort by Price</option>
                    <option value="low">Low to High</option>
                    <option value="high">High to Low</option>
                </select>
            </div>
            <div class="col-md-9">
                <div class="row" id="product-list">
                    <!-- Product Items -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="apple.jpg" class="card-img-top product-image" alt="Apple">
                            <div class="card-body text-center">
                                <h5 class="card-title">Fresh Apple</h5>
                                <p class="card-text">$2.99 per kg</p>
                                <a href="#" class="btn btn-custom">Add to Cart <i class="fas fa-shopping-cart cart-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="banana.jpg" class="card-img-top product-image" alt="Banana">
                            <div class="card-body text-center">
                                <h5 class="card-title">Organic Bananas</h5>
                                <p class="card-text">$1.50 per dozen</p>
                                <a href="#" class="btn btn-custom">Add to Cart <i class="fas fa-shopping-cart cart-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="carrot.jpg" class="card-img-top product-image" alt="Carrot">
                            <div class="card-body text-center">
                                <h5 class="card-title">Fresh Carrots</h5>
                                <p class="card-text">$1.99 per kg</p>
                                <a href="#" class="btn btn-custom">Add to Cart <i class="fas fa-shopping-cart cart-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>