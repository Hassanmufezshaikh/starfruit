<style>
    /* Custom Navbar Styling */
    .navbar-custom {
        background: linear-gradient(135deg, #ff5722, #ff9800);
        /* Trendy gradient */
        padding: 10px 20px;
    }

    .navbar-custom .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
    }

    .navbar-custom .nav-link {
        color: white !important;
        font-weight: 500;
        transition: 0.3s ease-in-out;
        padding: 8px 15px;
    }

    .navbar-custom .nav-link:hover {
        color: #000 !important;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 5px;
    }

    .navbar-custom .btn-custom {
        border: 2px solid white;
        color: white;
        transition: 0.3s ease-in-out;
    }

    .navbar-custom .btn-custom:hover {
        background: white;
        color: #ff5722;
    }

    /* Dropdown menu customization */
    .dropdown-menu {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 5px;
    }

    .dropdown-item:hover {
        background: #ff5722;
        color: white;
    }

    /* Adjustments for smaller screens */
    @media (max-width: 768px) {
        .navbar-custom {
            padding: 10px;
        }

        .navbar-nav {
            text-align: center;
        }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/starfruits">🌟 STAR FRUITS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/starfruits">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <!-- Dropdown for Categories -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="fruits.php">Fruits</a></li>
                        <li><a class="dropdown-item" href="vegetables.php">Vegetables</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact</a>
                </li>

                <!-- Call to Action Button -->
                <!-- <li class="nav-item">
                    <a class="btn btn-custom ms-3" href="shop.php">Shop Now</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap 5 JS (Required for dropdown) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>