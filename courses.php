<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devce-width,initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="CSS\courses.css">
</head>

<body>

<header>
    <img src="Logo.png" >
    <nav class="navigation">
        <a href="Home.php">Home</a>
        <a href="aboutus.php">About</a>
        <a href="courses.php">Courses</a>
        <a href="contactus.php">Contact us</a>
        <form class="logout" action="Logout.php" method="post" class="logoutbtnform">
          <button type="submit" name="logout" class="logoutbtn">Logout</button>
        </form>
    </nav>
</header>


<div class="wrapper">
    <h1>Sensitive Content Removal</h1>
    <div class="container">
        <div class="box">
            <a href="mathematics.php"><h3>Mathematics</h3></a>
        </div>

        <div class="box">
            <a href="science.php"><h3>Science</h3></a>
        </div>

        <div class="box">
            <a href="english.php"><h3>English</h3></a>
        </div>

        <div class="box">
            <a href="history.php"><h3>History</h3></a>
        </div>
    </div>
</div>



</body>
</html>
