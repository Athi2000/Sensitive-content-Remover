<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devce-width,initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS\loginstyle.css">
</head>

<body>

<header>
    <img src="Logo.png" alt="LOGO" class="logo">
    <nav class="navigation">
        <a href="Home.php">Home</a>
        <a href="aboutus.php">About</a>
        <a href="courses.php">Courses</a>
        <a href="contactus.php">Contact us</a>

    </nav>
</header>

<div class="form-box1">
    <div class="form-value">
        <form action="Loginform.php" method="post">
            <h2>Login</h2>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" name="user_name" value="" required>
                <label for="user_name">Username</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-open-outline"></ion-icon>
                <input type="password" name="pass_word" value="" required>
                <label for="pass_word">Password</label>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Remember Me. <a href="#"> Forget Password</a></label>
            </div>
            <button type="submit" name="button">Login</button>
            <div class="signup">
                <p>Don't have a account. <a href="signup.php">Sign up</p>
            </div>
        </form>

    </div>
</div>

</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>


</html>
