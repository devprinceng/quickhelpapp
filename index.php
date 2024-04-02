<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickHelps.</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-deepblue fw-bold" href="#">QuickHelp</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                </ul>
                <?php if (!isset($_SESSION['auth_user_id'])): ?>
                    <a href="register.php" class="nav-link ms-3 text-success fw-bold text-decoration-none">Register</a>
                    <a href="login.php" class="nav-link ms-3 text-success fw-bold text-decoration-none">Login</a>
                <?php else: ?>
                    <a href="desk.php" class="nav-link ms-3 text-success fw-bold text-decoration-none">Go to HelpDesk</a>
                <?php endif ?>
            </div>
        </div>
    </nav>

    <header class="container-fluid text-center bg-deepblue">
        <h1 class="text-white p-3">Welcome to our Help Desk System</h1>
    </header>

    <!-- carousel section -->
    <div id="carouselExampleSlidesOnly" class="container carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/help1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/help2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/help3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <section class=" my-5 p-5 bg-gray">
        <h2 class="text-deepblue text-center mb-4 fw-bold">Our Features</h2>
        <div class="d-flex fw-bold text-white justify-content-around">
            <div class="p-4 rounded bg-success">24/7 Support</div>
            <div class="p-4 rounded bg-info">Knowledge Base</div>
            <div class="p-4 rounded bg-primary">Accessible</div>
        </div>
    </section>

    <section class="contact py-5 border border-top border-1 text-center bg-gray">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to contact us:</p>
        <ul class="d-flex justify-content-center list-unstyled">
            <li style="margin-right: 10px;">Email: support@quickhelp.test</li>
            <li>Phone: 090 5145 8074</li>
        </ul>
    </section>
    <!-- </main> -->

    <footer class="p-3 text-center">
        <p>&copy; 2024 Help Desk System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>