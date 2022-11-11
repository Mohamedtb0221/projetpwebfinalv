<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MICRO CLUB</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@600&family=Oswald:wght@200;400&family=Roboto:ital,wght@1,500&family=Titillium+Web:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <a href="accueil.html"><img src="why.png"></a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar"><i class="fa fa-bars"></i></i></label>
        <nav class="navscroll">

            <div class="nav-links" id="nav-links">

                <ul>
                    <li><a href="accueil.html">Home</a></li>
                    <li><a href="presentation.html">Presentation ▼</a>
                        <ul>
                            <li><a href="presentation.html">who we are</a></li>
                            <li><a href="presentation.html">history</a></li>
                            <li><a href="presentation.html">activities</a></li>
                        </ul>
                    </li>
                    <li><a href="http://localhost/projetpweb/events1.php">Events</a></li>
                    <li><a href="http://localhost/projetpweb/form.php">Registration</a></li>
                    <li><a href="http://localhost/projetpweb/contact.php">Contact</a></li>
                </ul>
            </div>


        </nav>

    </header>



    <section class="location">
        <h1>Contact Page</h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.079583010814!2d3.183334314600834!3d36.72064987987463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e518cfc1752a9%3A0x2b982194dc321c1d!2sMicro%20Club!5e0!3m2!1sen!2sdz!4v1652957228447!5m2!1sen!2sdz"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


    <section class="contact_us">
        <div class="contact_row">

            <div class="contact_col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>P5CP+762, USTHB, Bab Ezzouar</h5>
                        <p>Alger,Algeria</p>

                    </span>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>06 65 65 65 65 <br>
                            07 89 89 89 89 <br>
                            05 55 65 55 65</h5>
                        <p>Call us</p>

                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>microclub.contact@gmail.com</h5>
                        <p>Contact us </p>

                    </span>
                </div>
            </div>
            <?php
            
            
                if(isset($_POST['send'])){
                    if(mail('contact@microclub.net',$_POST['subject'],"📧  from : ".$_POST['email']." \n\n message ►  ".$_POST['message'])){
                        echo '<script>alert("message envoyé !")</script>' ;
                    }else{
                        echo '<script>alert("message non envoyé !"</script>' ;
                    }
                }
            ?>
            <div class="contact_col">
                <form action="contact.php" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name="send" class="abtus1"> Send Message</button>

                </form>

            </div>


        </div>
    </section>

    <footer >
        <div class="footer-content">
            
            <p> You can find and contact  <b>Micro club</b>  on </p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/Micro.Club.USTHB/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/club_micro" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/microclub_usthb/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/micro-club-usthb/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="https://github.com/MicroClub-USTHB" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
        
     </footer>


</body>

</html>