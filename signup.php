<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devce-width,initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="CSS\loginstyle.css">
</head>

<body>

<header>
    <img src="Logo.png" alt="LOGO" class="logo">
    <nav class="navigation">
        <a href="Home.php">Home</a>
        <a href="aboutus.php">About</a>
        <a href="Courses.php">Courses</a>
        <a href="aboutus.php">Contact us</a>

    </nav>
</header>

<div class="form-box">
    <div class="form-value">
        <form action="registrationform.php" method="post">
            <h2>Sign up</h2>
            <div class="inputbox">
                <input type="text" name="namelbl"  required>
                <label for="namelbl">Name</label>
            </div>
            <div class="inputbox">
                <input type="date" name ="doblbl"  required>
                <label for="doblbl">Date of Birth</label>
            </div>
            <div class="inputbox">
                <input type="email" name="emaillbl" value="" required>
                <label for="emaillbl">Email</label>
            </div>
            <div class="inputbox">
                <input type="text" name="usernamelbl" value=""  required>
                <label for="usernamelbl">Username</label>
            </div>
            <div class="inputbox">
                <input type="password" name="passwordlbl" value="" required>
                <label for="passwordlbl">Password</label>
            </div>
            <div class="inputbox">
                <input type="password" name="confpasswordlbl" value="" required>
                <label for="confpasswordlbl">Confirm Password</label>
            </div>
            <button type="submit" name="signupbutton" value="Sign up">Sign up</button>
            <br><br>
            <button type="submit" name="cancelbutton" value="Cancel">Cancel</button>
            <div class="signup">
                <p>Already have a account. <a href="login.php"> Log in</p>
            </div>
        </form>
    </div>
</div>
</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</body>
</html>
