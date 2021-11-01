<?php
session_start();

if (isset($_SESSION['user'])) {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Basic need -->
    <title>kointube</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo2.svg">

</head>

<body>
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="images/logo.svg" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->

    <?php
    require_once 'auth/login.php';
    require_once 'auth/register.php';
    ?>

    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="db/auth/register.php">
                <?php if (isset($_SESSION['errors'])) { ?>
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error) { ?>
                            <li style="color: red;"><?php echo $error ?></li>
                    </ul>
                <?php }
                    } elseif (isset($_SESSION['message'])) { ?>
                <li style="color: green"><?php echo $_SESSION['message'] ?></li>
            <?php } ?>

            <div class="row">
                <label>
                    <input type="text" name="first_name" id="first_name" placeholder="FIRST NAME" required="required" />
                </label>
            </div>
            <div class="row">
                <label>
                    <input type="text" name="last_name" id="last_name" placeholder="LAST NAME" required="required" />
                </label>
            </div>
            <div class="row">
                <label>
                    <input type="text" name="username" id="username" placeholder="USERNAME" required="required" />
                </label>
            </div>
            <div class="row">
                <label>
                    <input type="email" name="email" id="email-2" placeholder="EMAIL ADDRESS" required="required" />
                </label>
            </div>

            <div class="row">
                <label>
                    <input type="password" name="password" id="password-2" placeholder="PASSWORD" required="required" />
                </label>
            </div>
            <div class="row">
                <label>
                    <input type="password" name="password_2" id="password-2" placeholder="CONFIRM PASSWORD" required="required" />
                </label>
            </div>
            <div class="row">
                <button type="submit" name="submit">sign up</button>
            </div>
            <br>
            <div class="row">
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>
            </form>
            <?php
            if (isset($_SESSION['errors']) || isset($_SESSION['message'])) {
                unset($_SESSION['errors']);
                unset($_SESSION['message']);
            }
            ?>
        </div>
    </div>
    <!--end of signup form popup-->



    <div class="landing-hero">
        <img src="images/logo.svg" alt="Logo">

        <div class="row landing-hero-text">
            <h2>MOST COMPLETE</h2>
            <h2 class="text-yellow">FILM REVIEW &middot; MOVIE DATABASE</h2>
            <h2>AND STREAMING PLATFORM</h2>
            <br>
            <a href="#" class="redbtn signupLink">sign up</a>
            <a href="#" class="redbtn loginLink" style="margin-left: 10px; margin-top: 10px;">LOG In</a>
        </div>


    </div>

    <!-- end of footer v3 section-->

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- landing14:38-->

</html>