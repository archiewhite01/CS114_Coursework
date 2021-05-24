<!--the header that is added for every page. includes basic page info like stylesheet etc.-->
<html lang="en">
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/stylesheet.css">
<head>
<script>window.style.zoom=80%;
</script>
    <?php session_start();?>
    <!--page title and image icon.-->
    <title>Training.</title>
    <link rel="shortcut icon" href="../images/directions-bike_116923.ico">

<!--    html for the navigation bar.-->
<!--    <div class="navigation">-->
<!--        <a href="../pages/about.php">About Us</a>-->
<!--        <a href="../pages/contact.php">Contact</a>-->
<!--    </div>-->

    <!--page main title. pressing takes user back to home page. Also sub heading below with description.-->
    <div class = header>
        <h1 class = title>
            <a href="../pages/index.php">Training.</a>
        </h1>
        <h2 class = tagline>helping you to reach your cycling training goals</h2>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark" style = "padding-top: 1rem; padding-bottom: 6%;color:white;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style=" alignment: right; font-weight: bold; font-size: 2rem">
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/index.php">Home</a>
                    </li>
                    <?php
                if (isset($_SESSION['loggedin'])) {
                    if ($_SESSION['admin']==1) {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='../admin/admin_dashboard.php'>Admin</a>
                    </li>";}
                    else{
                        echo"<li class='nav-item'>
                        <a class='nav-link' href='../pages/dashboard.php'>Dashboard</a>
                    </li>";
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='../pages/workouts.php'>Workouts</a>
                    </li>";
                    }
                    }
                    if (!(isset($_SESSION['loggedin']))){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='../pages/about.php'>About</a>
                    </li>";
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='../pages/contact.php'>Contact us</a>
                    </li>";


                    }

                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="../pages/account.php">Account</a>
                    </li>
                </ul>
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo"<a class='button1' href='../admin/logout.php'>Logout</a>";
                }
                else{
                    echo "<a class='button1' style='margin-right:2%' href='../pages/signin.php'>Sign in</a>";
                    echo "<a class='button1' href='../pages/signup.php'>Sign up</a>";
                }
                ?>
            </div>
        </div>
    </nav>
</head>
</html>