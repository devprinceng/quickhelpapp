<?php
session_start();
if (!isset($_SESSION['firstname']) or empty($_SESSION['firstname']))
    header('location: index.php');
include 'functions.php';
$help = viewhelp($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office | QuickHelp</title>
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
            <a class="navbar-brand text-light fw-bold" href="index.php">QuickHelp.</a>
            <button class="navbar-toggler bg-white d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                </ul>
                <a href="javascript:void()" class="ms-2 text-white fw-bold text-decoration-none px-2"
                    style="border-right: solid 2px #f0f0f0;">
                    <?= $_SESSION['firstname'] ?>
                </a> <a href="logout.php" class="ms-3 text-white fw-bold text-decoration-none">Logout</a>
            </div>
        </div>
    </nav>

    <header class="container-fluid bg-gray text-center">
        <h2 class="text-deepblue p-3 border-bottom border-2 mb-3">Office | QuickHelp Services...</h2>
    </header>
    <div class="container mb-2">
        <div class="bg-gray">
            <h2 class="border-bottom my-3 p-3 text-deepblue">
                <?= $help['title'] ?>
            </h2>
            <p class="p-3 fs-4">
                <?= $help['message'] ?>
            </p>
        </div>


    </div>


    <!-- <div class="container-fluid mt-4 py-5 text-center bg-gray">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to contact us:</p>
        <ul class="d-flex justify-content-center list-unstyled">
            <li class="mx-3">Email: support@example.com</li>
            <li>Phone: 090 5145 8074</li>
        </ul>
    </div>
    </main> -->

    <!-- <footer class="container p-3 text-center">
        <p>&copy; 2024 Help Desk System. All rights reserved.</p>
    </footer> -->

    <!-- Bootstrap JS Bundle -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>