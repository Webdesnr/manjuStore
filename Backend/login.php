<?php
    include './db/login_function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Manju store</title>
    <link rel="stylesheet/less" type="text/css" href="./styles/login.less">
    <link rel="stylesheet" href="./assets/fonts/fonts.css">
    <script type="text/javascript" src="../node_modules/less/dist/less.min.js"></script>
</head>

<body>
    <div class="login">
        <h1 class="title">Welcome To Manju Store</h1>
        <form action="login.php" method="post">
            <div class="wrapper">
                <div class="inputs">
                    <input id="input" type="text" name="user_name" required>
                    <span class="placeholder">User Name</span>
                </div>
                <div class="inputs">
                    <input id="input" type="text" name="password" required>
                    <span class="placeholder">Password</span>
                </div>
                <div class="btn">
                    <button class="login-btn" name="login">LOGIN</button>
                </div>
                <div class="signup">
                    <span>Don't Have an account?</span><a href="signup.php">SignUp</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>