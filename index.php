<html lang="en">
<head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sign-up-form">
        <img src="./assets/usericon.png">
        <h1>Sign Up Now</h1>
        <form method="post" action="connect.php">
            <input type="username" name="username" class="input-box" placeholder="Your Username"><br><br>
            <input type="password" name="password" class="input-box" placeholder="Your Password"><br><br>
            <p><span><input type="checkbox"></span> I agree to the terms of
            services</p>
            <button type="button" value="Submit" class="signup-btn">Sign up</button>
            <hr>
            <p class="or">OR</p>
            <button type="button" class="FB-btn">Login with Facebook</button>
            <p>Do you have an account ? <a href="signup.php">Sign in</a></p>
            </form>
        </form>

</body>
</html>