<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Signup - Manju store</title>
    <link rel="stylesheet/less" type="text/css" href="./styles/signup.less">
    <link rel="stylesheet" href="./assets/fonts/fonts.css">
    <script type="text/javascript" src="../node_modules/less/dist/less.min.js"></script>
</head>

<body>
    <div class="signup">
        <h1 class="title">Singup To Manju Store</h1>
        <div class="wrapper">
            <form action="login.php" method="post">
                <div class="inputs">
                    <input id="input" type="text" name="user_name" required>
                    <span class="placeholder">UserName</span>
                </div>
                <div class="inputs">
                    <input id="input" type="text" name="password" required>
                    <span class="placeholder">Password</span>
                </div>
                <div class="inputs">
                    <input id="input" type="text" name="re_password" required>
                    <span class="placeholder">Confirm Password</span>
                </div>
                <div class="btn">
                    <a class="signup-btn" name="login" href="#">SIGNUP</a>
                </div>
                <div class="signup-msg">
                    <span>Already Have an account?</span><a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>