<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- landing14:04-->

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
        <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->
    <!--login form popup-->
    <?php include("db/function.php"); ?>
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username">

                        <input type="email" name="email" id="email" placeholder="EMAIL" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="********************" required="required" />
                    </label>
                </div>
                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                        </div>
                        <a href="#">Forget password ?</a>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" name="login_btn">Login</button>
                </div>
            </form>
            <div class="row">
                <p>Or via social</p>
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>
        </div>
    </div>
    <!--end of login form popup-->

    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="#">
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
                        <input type="password" name="password_1" id="password-2" placeholder="PASSWORD" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label>
                        <input type="password" name="password_2" id="repassword-2" placeholder="CONFIRM PASSWORD" required="required" />
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
        </div>
    </div>
    <!--end of signup form popup-->



    <div class="landing-hero">
        <img src="images/logo.svg" alt="Logo">

        <div class="row landing-hero-text">
            <h2>MOST COMPLETED</h2>
            <h2 class="text-yellow">FILM REVIEW &middot; MOVIE DATABASE</h2>
            <h2>AND STREAMING PLATFORM</h2>
            <br>
            <a href="#" class="redbtn signupLink">sign up</a>
            <a href="#" class="redbtn loginLink" style="margin-left: 10px;">LOG In</a>
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