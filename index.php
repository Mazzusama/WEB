<html lang="en">
<head>
    <title>Sign In Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/usericon.png"type="image">
</head>
<body>
    <div class="sign-up-form">
        <img src="./assets/usericon.png">
        <h1>Sign Up Now</h1>
        <form method="post" action="connect.php">
            <input name="username" class="input-box" placeholder="Your Email"><br><br>
            <input name="password" class="input-box" placeholder="Your Password"><br><br>
            <p><span><input type="checkbox"></span> I agree to the terms of
            services</p>
            <button type="button" class="signup-btn">Sign in</button>
            <hr>
            <p class="or">OR</p>
            <button type="button" class="FB-btn">Login with Facebook</button>
            <p>Do you have an account ? <a href="signup.php">Sign up</a></p>
            </form>
        </form>

</body>
</html>