<?php
require 'config/config.php';

if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    $user_deatails_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_deatails_query);
} else {
    header("Location: register.php");
}

?>

<html>

<head>
    <title>The Social Net</title>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="top_bar">
        <div class="logo">
            <a href="index.php">The Social Net</a>
        </div>
        <nav>
            <a href="<?php echo $userLoggedIn; ?>">
                <?php
                echo $user['first_name'];
                ?>
            </a>
            <a href="#"><i id="msg" class="fa-solid fa-message fa-lg  "> </i></a>
            <a href="index.php"><i class="fa-solid fa-house fa-lg  "> </i></a>
            <a href="#"><i class="fa-solid fa-bell fa-lg  "></i></a>
            <a href="#"><i class="fa-solid fa-users fa-lg  "></i></a>
            <a href="#"><i class="fa-solid fa-gear fa-lg"></i></a>
            <a href="includes/handlers/logout.php">
                <i class="fa fa-sign-out fa-lg"></i>
            </a>

        </nav>
    </div>

    <div class="wrapper">