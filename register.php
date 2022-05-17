<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Resume Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    ` <div class="container back">
        <div class="screen">
            <div class="screen__content">
                <h5 style="color:#000;font-size:25px;font-weight:bold;color:#000">Resume Builder Sign In</h5>
                <form method="post" action="register.php" class="login register">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="username" class="login__input" placeholder="Username" required autocomplete="off">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-envelope"></i>
                        <input type="text" name="email" class="login__input" placeholder="email" required autocomplete="off">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password1" class="login__input" placeholder="Password" required autocomplete="off">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password2" class="login__input" placeholder="Confirm Password" required autocomplete="off">
                    </div>
                    <button class="button register__submit" name="reg_user" type="submit">
                        <span class=" button__text">Register</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                    <br>
                    <p style="font-weight:bold;">
                        Already a member ? <a style=" text-decoration:none;color:#000;font-weight:bold;"
                            href="login.php">Login In</a>
                    </p>
                    <?php
        //including the database connection file
        include_once("server.php");
        $error = false;
        // Check If form submitted, insert user data into database.
        if (isset($_POST['reg_user'])) {
            $username = $_POST['username'];
            $email    = $_POST['email'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];

            
		if(strlen($password1) < 8) {
            $error = true;
            $password_error = "Password must be minimum of 8 characters";
        }
        if($password1 != $password2) {
            $error = true;
            $cpassword_error = "Password and Confirm Password doesn't match";
        }

            // If email already exists, throw error
            $email_result = mysqli_query($mysqli, "select 'email' from users where email='$email'");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($email_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$email'.";
            } else {
                $password1 = md5($password1);
                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO users(username,email,password) VALUES('$username','$email','$password1')");

                // check if user data inserted successfully.
                if ($result && !$error) {
                    echo "<br/><br/>User Registered successfully.";
                } else {
                    echo "Check both password & Password must be minimum of 8 characters ." . mysqli_error($mysqli);
                }
            }
        }

        ?>
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