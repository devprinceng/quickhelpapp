<?php
session_start();
if (!isset($_SESSION['firstname']) or empty($_SESSION['firstname']))
    header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk | QuickHelp</title>
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
        <h2 class="text-deepblue p-3">Welcome to QuickHelp Service...</h2>
    </header>
    <div class="container mb-2">
        <div id="desk" class="border border-2">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>
                        <?= $_SESSION['success'];
                        unset($_SESSION['success']) ?>
                    </strong>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>
                        <?= $_SESSION['error'];
                        unset($_SESSION['error']) ?>
                    </strong>
                </div>

            <?php endif ?>
            <h2 class="text-center text-deepblue pt-0 mb-5">Enter Help Details</h2>
            <form method="post" action="functions.php">
                <div class="mb-3">
                    <label for="title"></label>
                    <input type="text" name="title" class="form-control border border-1" placeholder="Title" required>
                </div>
                <input type="hidden" name="user_id" value="<?= $_SESSION['auth_user_id'] ?>">

                <div class="mb-3">
                    <textarea name="message" cols="30" rows="5" type="text" class="form-control border border-1"
                        placeholder="Enter Help Message here..." required></textarea>
                </div>
                <div class="d-grid">
                    <input type="submit" name="save_help" class="btn btn-primary bg-deepblue" value="Submit">
                </div>
            </form>
        </div>

    </div>

    <div class="container-fluid mt-4 py-5 text-center bg-gray">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to contact us:</p>
        <ul class="d-flex justify-content-center list-unstyled">
            <li class="mx-3">Email: support@example.com</li>
            <li>Phone: 090 5145 8074</li>
        </ul>
    </div>
    <!-- </main> -->

    <footer class="container p-3 text-center">
        <p>&copy; 2024 Help Desk System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>