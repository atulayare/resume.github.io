<?php

/**
 * Name: Simple PHP Login & Registration Script
 * Tutorial: https://tutorialsclass.com/code/simple-php-login-registration-script
 */

// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("server.php");

// If form submitted, collect email and password from form
if (isset($_POST['login_user'])) {
    $username    = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'username', 'password' from users
        where username='$username' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["username"] = $username;
        header("location: index.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Resume Generator</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container back">
        <div class="screen">
            <div class="screen__content">
                <h5 style="color:#000;font-size:25px;font-weight:bold;color:#000">Resume Builder Login</h5>
                <form class="login" method="post" action="login.php">
                    <?php include('errors.php'); ?>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="Username" name="username" required autocomplete="off">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="Password" name="password" required autocomplete="off">
                    </div>
                    <button name="login_user" class="button login__submit">
                        <span class="button__text">Log In</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                    <br>
                    <p style="font-weight:bold;">
                        Not yet a member? <a style=" text-decoration:none;color:#000;font-weight:bold;"
                            href="register.php">Sign up</a>
                    </p>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>

</html>