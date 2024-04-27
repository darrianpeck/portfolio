<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($subject) ) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            $displayMessage = "Thank you ".$name.".";

            // Your email address where you want to receive messages
            $to = "info@darrianpeck.com";

            $subject = "New Message from Portfolio Contact Form";
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            // Send email
            mail($to, $subject, $body);
            //make if statement to see if true

            // Redirect to thank you page
            header("Location: thankYou.php");
            exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"><!--Title font-->
    <link href="css/mainStyle.scss" rel="stylesheet" type="text/scss">
    <link href="css/mainStyle.css" rel="stylesheet" type="text/css">
    <link href="css/800style.scss" rel="stylesheet" type="text/scss">
    <link href="css/800style.css" rel="stylesheet" type="text/css">
    <link href="css/animation.scss" rel="stylesheet" type="text/scss">
    <link href="css/animation.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="style.scss" rel="stylesheet" type="text/scss">

    <script defer src="js/javascript.js"></script><!--defer attribute will run after the html body-->
    <style>
        .container {
            margin-top: 90px;
            padding: 30px;
        }

        h2 {
            padding: 10px;
        }

        p {
            padding: 10px
        }

        button {
            border: 1px solid #2B2A2A;
        }

    </style>

    <title>Thank You!</title>
</head>
<body>
    <div id="indexContainer">
        <header id="header">
            <nav id="nav">
                <a href="index.html"><img src="images/logos/DPUXILOGOgrayI.png" style="margin-left: 50px;" alt="DP UX/UI Logo" id="logo"></a>
                <img src="images/icons/hamburgerMenu.png" alt="hamburger menu icon" id="hambMenu" onclick="displayMenu()">
                <ul id="navMenu">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="index.html">ABOUT</a></li>
                    <li><a href="index.html">UX/UI</a></li>
                    <li><a href="index.html">WEB DEVELOPMENT</a></li>
                    <li><a href=".index.html">CONTACT</a></li>
                </ul>
            </nav><!--close nav-->
        </header>


        <div class="container">
        <h2><?php echo $displayMessage; ?></h2>

            <p>Your message has been successfully sent. I'll get back to you as soon as possible.</p>
            <p><button><a href="index.html">Go back to Darrian's Portfolio</a></button></p>
        </div>

        <?php        
            }
            else {
                $message = "Your message was not sent. Do NOT try again.";
                return;
            }
        ?>

        <footer>
            <a href="index.html"><img src="images/logos/DPUXILOGOgrayI.png" alt="DP UX/UI Logo" id="logo"></a>
            <nav>
                <a href="https://www.linkedin.com/in/darrian-peck-39835814a/"><img src="images/icons/linkedin.png" alt="LinkedIn icon"></a>
                <a href="https://github.com/darrianpeck"><img src="images/icons/github.png" alt="GitHub icon"></a>
                <a href="https://www.instagram.com/designdarrian/"><img src="images/icons/instagram.png" alt="Instagram icon"></a>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="index.html">ABOUT</a></li>
                    <li><a href="index.html">UX/UI</a></li>
                    <li><a href="index.html">WEB DEVELOPMENT</a></li>
                    <li><a href="index.html">CONTACT</a></li>
                </ul>
                <p>Copyright <span id="year"></span>; Designed by DARRIAN</p>
            </nav><!--close nav-->
        </footer>
    </div><!--close indexContainer-->
</body>
</html>
