<html>
    <!--includes the header html in the page. as well as an extra subheading.-->
    <head>
        <?php include '../html/header.html'; ?>
        <div class = page-header>
            <h2>Built for you, around you.</h2>
        </div>
    </head>
    <body>
        <!-- three basic buttons that are used as a dashboard display to the user of which workout/calendar for that day-->
        <div class = "center-align">
            <button class ="basic-format" onclick="location.href='../pages/calendar.php';">
                <h3>Today's Date</h3>
                <p class="display-text">
                    <script> document.write(new Intl.DateTimeFormat('en-GB').format().toString()); </script></p>
            </button>
            <button class = "basic-format" onclick="location.href='../pages/workouts.php';">
                <h3>Today's Workout</h3>
                <p class = "display-text">Carter</p>
            </button>
            <button class = "basic-format">
                <h3>Workout Length</h3>
                <p class="display-text">1:30</p>
            </button>
    </body>
    <!--includes the footer html in the page.-->
    <footer>
        <div class="footer">
            <?php include '../html/footer.html'; ?>
        </div>
    </footer>
</html>