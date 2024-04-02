<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Help Desk</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-deepblue">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="index.php">QuickHelps.</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                </ul>
                <a href="register.php" class="ms-3 text-white fw-bold text-decoration-none">Register</a> <a
                    href="javascript:void()" class="ms-3 text-white fw-bold text-decoration-none">Login</a>
            </div>
        </div>
    </nav>

    <header class="container-fluid bg-gray text-center">
        <h1 class="text-deepblue p-3">Welcome to QuickHelp Services</h1>
    </header>
    <div class="container d-flex mb-4">
        <div class="login-img">
        </div>
        <div class="glassmorphic-container mb-3">
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>
                        <?= $_SESSION['error'];
                        unset($_SESSION['error']) ?>
                    </strong>
                </div>
            <?php endif ?>

            <h2 class="text-center text-deepblue pt-0 mb-4">Login to get Help</h2>
            <form method="post" action="functions.php">
                <div class="mb-2">
                    <input type="email" name="email" class="form-control" placeholder="email" required>
                </div>
                <div class="mb-2">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-primary bg-deepblue" name="login" value="Login">
                </div>
            </form>
        </div>

    </div>

    <div class="container-fluid border border-top border-1 py-5 text-center bg-gray">
        <h2 class="text-deepblue">Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to contact us:</p>
        <ul class="d-flex justify-content-center list-unstyled">
            <li class="mx-3">Email: support@quickhelp.test</li>
            <li>Phone: 090 5145 8074</li>
        </ul>
    </div>
    <!-- </main> -->

    <footer class="container p-3 text-center">
        <p>&copy; 2024 Help Desk System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        var alertList = document.querySelectorAll(".alert");
        alertList.forEach(function (alert) {
            new bootstrap.Alert(alert);
        });
    </script>
</body>

</html>