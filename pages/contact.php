<html>
    <!--includes the header html in the page.-->
    <head>
        <?php include '../html/header.html'; ?>
    </head>
    <body>
        <?php
        if($_POST) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $words = $_POST['message'];

            $to = "archiewhite1@gmail.com";
            $subject = "New message from ".$name."";
            $txt = "FROM: ".$email."\n\n".$words."";
            $headers = "From: webmaster@example.com" . "\r\n" .
                "CC: ".$email."";

            mail($to, $subject, $txt, $headers);
            echo "message sent!";



        }
        ?>
        <h3 style="text-align: center">Be reassured in the fact that we probably won't reply to you!</h3>

        <div class="cell">
            <form method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name..">

                <label for="email address">Email Address</label>
                <input type="text" id="email" name="email" placeholder="Enter your email address...">

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your message here..." style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>
    </body>
    <footer>
        <?php include '../html/footer.html'; ?>
    </footer>
</html>